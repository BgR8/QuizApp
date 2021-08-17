<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Laravel Kurulum
```
composer create-project laravel/laravel contactapp
cd contactapp
php artisan serve
```
## Jetstream Kurulum
```
composer require laravel/jetstream
```
## Jetstream with Livewire
```
php artisan jetstream:install livewire
```
## Veritabanına Gönder
```
php artisan migrate
```
## npm install && npm run dev
```
npm install
npm run dev
```
## Yapılan değişiklikeri otomatik kaydet
```
npm run watch
```
## Storage Linki ver
```
php artisan storage:link
```
## Bootstrap kurulum
```
npm i bootstrap
```
## Bootstrap'ı ```resources>css>app.css``` import et
```
@import 'bootstrap';
```
# Veritabanını Temizle
```
php artisan migrate:fresh
```
## Seeders yorumunu kaldır ve 5 tane üye oluştur.
```
// seeders/DatabaseSeeder.php
\App\Models\User::factory(5)->create();
```
## Üye türünü belirt (admin, user)
```
// admin/migrations/.._create_users_table.php
$table->enum('type', ['admin', 'user'])->default('user');
```
## Üyeleri oluştur
```
// database/factories/UserFactory.php
$types = ['admin', 'user'];
'type' => $types[rand(0,1)],
```
## Tabloları sıfırla ve kullanıcı tablosuna verileri yükle
```
php artisan migrate:fresh --seed
```