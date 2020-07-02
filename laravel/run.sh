#/bin/sh
docker-compose down
docker-compose up -d --build
# docker-compose exec main php artisan database:create funding
docker-compose exec main php artisan migrate:refresh
docker-compose exec main php artisan passport:install --force
docker-compose exec main php artisan passport:keys --force
docker-compose exec main composer dump-autoload
docker-compose exec main php artisan db:seed
docker-compose exec main php artisan key:generate
docker-compose exec main php artisan config:clear
