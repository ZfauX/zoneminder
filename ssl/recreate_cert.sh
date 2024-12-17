#! /usr/bin/env bash
openssl req -new -nodes -text -out zoneminder.csr -keyout zoneminder.key -subj "/C=RU/ST=Moskovskaya oblast'/L=Shahovskaya/O=OOO "ORION"/OU=IT/CN=zm1.terminal.lft"
chmod og-rwx zoneminder.key
openssl x509 -req -in zoneminder.csr -text -days 365 -extfile /etc/ssl/openssl.cnf -extensions v3_ca -signkey zoneminder.key -out zoneminder.crt
mv zoneminder.key /etc/ssl/private/ 
mv zoneminder.crt /etc/ssl/certs/
rm zoneminder.csr
systemctl reload apache2