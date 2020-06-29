#/bin/sh
docker-compose down
docker-compose up -d --build
docker-compose exec funding_main php artisan migrate:refresh
docker-compose exec funding_main php artisan passport:install --force
docker-compose exec funding_main php artisan passport:keys --force
docker-compose exec funding_main composer dump-autoload
docker-compose exec funding_main php artisan db:seed
docker-compose exec funding_main php artisan key:generate
docker-compose exec funding_main php artisan config:clear
