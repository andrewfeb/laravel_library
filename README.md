# Laravel - Library
Sistem Perpustakaan sederhana dengan menggunakan Laravel 10

## Instalasi
### Clone repo

```bash
# clone the repo
$ git clone https://github.com/andrewfeb/laravel_library.git

# install app's dependencies
$ composer install
```

### Konfigurasi database MySQL
Copy file ".env.example", dan ubah namanya menjadi ".env". Kemudian di file ".env" ubah konfigurasi database seperti dibawah ini:
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=library
- DB_USERNAME=root
- DB_PASSWORD=

Run Laravel migration

```bash
# run database migration and seed
$ php artisan migrate:refresh --seed
```

### Login
- email   : admin@library.dev
- password: password

**Note**
Untuk mengubah default user dapat dilakukan di file database/seeds/usersTableSeeder.php dan harus dilakukan sebelum melakukan migrate

