FROM mediawiki:1.42.4

# zip is needed for composer; vim is needed to edit files temporarily
RUN apt-get update && apt-get -y install zip vim

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
