# Hacker News-ish link aggregation site

## Install
```bash
git clone https://github.com/nayed/linking.git

cd linking

composer install

mv .env.example .env

change your database connexion in the .env file

php artisan key:generate

php artisan migrate

php artisan serve

```

and go to localhost:8000