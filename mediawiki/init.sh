#! /bin/bash

cd /var/www/html && \
php maintenance/run.php install.php --dbuser test --dbpass test "Miraheze Meta" Lih --pass MirahezeTest --dbserver mariadb && \
php maintenance/run.php update.php --quick

# install CheckUser
cd /var/www/html
cd extensions/
git clone -b REL1_42 https://gerrit.wikimedia.org/r/mediawiki/extensions/CheckUser
composer update --no-dev
cd ..

# install other extensions else from composer.local.json
composer update

cat LocalSettings2.php >> LocalSettings.php

# update all extensions
php maintenance/run.php update.php --quick
