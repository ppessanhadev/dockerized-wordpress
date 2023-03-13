FROM wordpress
RUN chown -R www-data:www-data /var/www/html
RUN usermod -u 1000 www-data
RUN usermod -G staff www-data
