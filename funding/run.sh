#/bin/sh
docker-compose down
docker-compose up -d --build
docker-compose exec api php artisan migrate:refresh
docker-compose exec api php artisan passport:install --force
docker-compose exec api php artisan passport:keys --force
docker-compose exec api composer dump-autoload
docker-compose exec api php artisan db:seed
docker-compose exec api php artisan key:generate
docker-compose exec api php artisan config:clear
