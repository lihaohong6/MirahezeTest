#! /bin/bash

cd /var/www/html && \
php maintenance/run.php install.php --dbuser test --dbpass test MirahezeTest Lih --pass MirahezeTest --dbserver mariadb && \
php maintenance/run.php update.php --quick

curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
apt-get update && apt-get -y install zip
cd /var/www/html && composer update --no-dev

rm LocalSettings.php
cp LocalSettings2.php LocalSettings.php

# update all extensions
php maintenance/run.php update.php --quick
