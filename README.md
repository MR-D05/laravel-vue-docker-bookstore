# laravel-vue-docker-bookstore

The following is a list of commands to execute to get this demo project up and running:

```
docker-compose up -d
docker exec -it laravel-vue-docker-bookstore bash
composer install
exit
docker exec -it laravel-vue-docker-bookstore-db bash
mysql --user=root --password
ALTER USER 'root' IDENTIFIED WITH mysql_native_password BY '123456';
FLUSH PRIVILEGES;
\q
exit
docker exec -it laravel-vue-docker-bookstore bash
php artisan migrate:refresh
php artisan migrate
php artisan db:seed
php artisan passport:install
npm install
npm run dev
```

Now navigate to http://localhost:8008/, generate a key and refresh.

Helpful links and list of credentials:

http://localhost:8008/
adminer: http://localhost:8080/
dbcreds: yourIP:3307, user: root, Password: 123456
admin panel login: user: test@gmail.com password: test
