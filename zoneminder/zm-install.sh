#!/usr/bin/env bash
clear
read -p "This script installs ZoneMinder 1.37.x on Debian 12 with LAMP (MySQL or Mariadb) installed...
This script must be run as root!
Press Enter to continue or Ctrl + c to quit" nothing
clear
apt install -y lsb-release gnupg2 net-tools golang-go 
echo "deb https://zmrepo.zoneminder.com/debian/master "`lsb_release  -c -s`"/" | tee /etc/apt/sources.list.d/zoneminder.list
wget -O - https://zmrepo.zoneminder.com/debian/archive-keyring.gpg | apt-key add -
mv /etc/apt/trusted.gpg /etc/apt/trusted.gpg.d/
read -p "Warning! Check above to insure the line says OK. If not the GPG signing key was not installed and you will need to figure out why before continuing. 
Press enter to continue" nothing
apt update
clear
apt install zoneminder --install-recommends -y
systemctl enable --now zoneminder
openssl req -new -nodes -text -out root.csr -keyout root.key -subj "/C=RU/ST=Moskovskaya oblast'/L=Shahovskaya/O=OOO "ORION"/OU=IT/CN=root"
chmod og-rwx root.key
openssl x509 -req -in root.csr -text -days 365 -extfile /etc/ssl/openssl.cnf -extensions v3_ca -signkey root.key -out root.crt
openssl req -new -nodes -text -out zoneminder.csr -keyout zoneminder.key -subj "/C=RU/ST=Moskovskaya oblast'/L=Shahovskaya/O=OOO "ORION"/OU=IT/CN=zm1.terminal.lft"
chmod og-rwx zoneminder.key
openssl x509 -req -in zoneminder.csr -text -days 365 -CA root.crt -CAkey root.key -CAcreateserial -out zoneminder.crt
openssl req -new -nodes -text -out rtsptoweb.csr -keyout rtsptoweb.key -subj "/C=RU/ST=Moskovskaya oblast'/L=Shahovskaya/O=OOO "ORION"/OU=IT/CN=RTSPtoWeb"
chmod og-rwx rtsptoweb.key
openssl x509 -req -in rtsptoweb.csr -text -days 365 -CA root.crt -CAkey root.key -CAcreateserial -out rtsptoweb.crt
mv zoneminder.key root.key rtsptoweb.key /etc/ssl/private/ 
mv zoneminder.crt root.crt rtsptoweb.crt /etc/ssl/certs/
rm zoneminder.csr rtsptoweb.csr root.csr
adduser www-data video
a2enconf zoneminder
a2enmod rewrite
a2enmod headers
a2enmod expires
a2enmod ssl
mv $HOME/zoneminder/apache/000-default.conf /etc/apache2/sites-available/
mv $HOME/zoneminder/apache/default-ssl.conf /etc/apache2/sites-available/
mv $HOME/zoneminder/apache/ports.conf /etc/apache2/
mv $HOME/zoneminder/cron/recreate_crt /etc/cron.d/
chmod 775 $HOME/zoneminder/ssl/recreate_cert.sh
a2ensite default-ssl.conf
systemctl reload apache2
cd $HOME
git clone https://github.com/ZfauX/RTSPtoWeb
cd $HOME/RTSPtoWeb
sed -i 's/"http_dir": "web"/"http_dir": "/root/RTSPtoWeb/web"/' config.json
sed -i 's/"https": false/https": true/' config.json
sed -i 's/"https_cert": "server.crt"/"https_cert": "/etc/ssl/certs/rtsptoweb.crt"/' config.json
sed -i 's/"https_key": "server.key"/"https_key": "/etc/ssl/private/rtsptoweb.key"/' config.json
sed -i 's/"https_port": ":443"/"https_port": ":8084"/' config.json
go build
mv $HOME/zoneminder/RTSPtoWeb/rtsptoweb.service /etc/systemd/system/
systemctl daemon-reload
systemctl enable --now rtsptoweb
read -p "Install complete. Open Zoneminder/Options and set the timezone. Press enter to continue" nothing
clear
