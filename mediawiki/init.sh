#! /bin/bash

MW_HOME=/var/www/html

cd $MW_HOME && \
php maintenance/run.php install.php --dbuser test --dbpass test "Miraheze Meta" Lih --pass MirahezeTest --dbserver mariadb && \
php maintenance/run.php update.php --quick

# install CheckUser
cd $MW_HOME/extensions
git clone -b REL1_43 https://gerrit.wikimedia.org/r/mediawiki/extensions/CheckUser
composer update --no-dev

# install other extensions from composer.local.json
cd $MW_HOME
composer update

# append custom settings tweaks
cat LocalSettings2.php >> LocalSettings.php

# update all extensions
php maintenance/run.php update.php --quick
