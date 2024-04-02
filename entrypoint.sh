#!/bin/bash

npm i -g n
n 20.5.0
npm install
npm run prod

composer install  --no-interactioin --no-progress

php artisan key:generate
php artisan migrate
php artisan cache:clear
php artisan config:clear
cd public && ln -sf ../storage/app/public storage

chown -R www-data:www-data /var/www

exec "$@"