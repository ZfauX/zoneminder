#!/usr/bin/env bash
clear
read -p "This script installs ZoneMinder 1.36.x on Debian 12 with LAMP (MySQL or Mariadb) installed...
This script must be run as root!
Press Enter to continue or Ctrl + c to quit" nothing
clear
apt install -y lsb-release gnupg2 
echo "deb https://zmrepo.zoneminder.com/debian/master "`lsb_release  -c -s`"/" | tee /etc/apt/sources.list.d/zoneminder.list
wget -O - https://zmrepo.zoneminder.com/debian/archive-keyring.gpg | apt-key add -
mv /etc/apt/trusted.gpg /etc/apt/trusted.gpg.d/
read -p "Warning! Check above to insure the line says OK. If not the GPG signing key was not installed and you will need to figure out why before continuing. 
Press enter to continue" nothing
apt update
clear
apt install zoneminder --install-recommends -y
systemctl enable --now zoneminder
openssl req -new -nodes -text -out zoneminder.csr -keyout zoneminder.key -subj "/C=RU/ST=Moskovskaya oblast'/L=Shahovskaya/O=OOO "ORION"/OU=IT/CN=zm1.terminal.lft"
chmod og-rwx zoneminder.key
openssl x509 -req -in zoneminder.csr -text -days 365 -extfile /etc/ssl/openssl.cnf -extensions v3_ca -signkey zoneminder.key -out zoneminder.crt
mv zoneminder.key /etc/ssl/private/ 
mv zoneminder.crt /etc/ssl/certs/
rm zoneminder.csr
adduser www-data video
a2enconf zoneminder
a2enmod rewrite
a2enmod headers
a2enmod expires
a2enmod ssl
mv $HOME/zoneminder/000-default.conf /etc/apache2/sites-available/
mv $HOME/zoneminder/default-ssl.conf /etc/apache2/sites-available/
mv $HOME/zoneminder/ru_ru.php / /usr/share/zoneminder/www/lang/
mv $HOME/zoneminder/recreate_crt /etc/cron.d/
chmod +x $HOME/zoneminder/recreate_cert.sh
a2ensite default-ssl.conf
systemctl reload apache2
read -p "Install complete. Open Zoneminder/Options and set the timezone. Press enter to continue" nothing
clear
