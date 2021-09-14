FROM php:fpm
RUN docker-php-ext-install pdo pdo_mysql
RUN pecl install xdebug && docker-php-ext-enable xdebug
# if you make any changes to the PHP.Dockerfile in future, you'll need to manually rebuild it by running the command docker-compose build
