#! /usr/bin/env bash
openssl req -new -nodes -text -out zoneminder.csr -keyout zoneminder.key -subj "/C=RU/ST=Moskovskaya oblast'/L=Shahovskaya/O=OOO "ORION"/OU=IT/CN=zm1.terminal.lft"
chmod og-rwx zoneminder.key
openssl x509 -req -in zoneminder.csr -text -days 365 -CA /etc/ssl/certs/root.crt -CAkey root.key -CAcreateserial -out zoneminder.crt
openssl req -new -nodes -text -out rtsptoweb.csr -keyout rtsptoweb.key -subj "/C=RU/ST=Moskovskaya oblast'/L=Shahovskaya/O=OOO "ORION"/OU=IT/CN=RTSPtoWeb"
chmod og-rwx rtsptoweb.key
openssl x509 -req -in rtsptoweb.csr -text -days 365 -CA /etc/ssl/certs/root.crt -CAkey root.key -CAcreateserial -out rtsptoweb.crt
mv zoneminder.key rtsptoweb.key /etc/ssl/private/ 
mv zoneminder.crt rtsptoweb.crt /etc/ssl/certs/
rm zoneminder.csr rtsptoweb.csr
systemctl reload apache2
