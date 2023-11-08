FROM  ggmartinez/laravel:php-82-Xdebug

COPY . /app
RUN composer install && \
    cp .env.example .env && \
    php artisan key:generate

CMD php artisan migrate && php artisan serve --host 0.0.0.0 --port 8001

