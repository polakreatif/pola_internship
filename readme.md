# Laundry Web App
Aplikasi website laundry sederhana. Fitur (edit, tambah, hapus) jumbotron, tentang kami, jasa laundry, pesanan, pengguna, sosial media, integrasi WA, dan lainnya.

## Sistem Pengembangan Aplikasi
1. Laptop Windows 8
2. Xampp for Windows 7.4.5 (PHP 7.4.5) untuk PHP dan MySql
3. PHP v ^7.2
4. Composer
5. Laravel versi 6.0
6. Git v 2.23.0

## Cara Instalasi Lokal di Komputer/Laptop
1. Clone/dapatkan code ini.
2. Jalankan Xampp dan buatlah database laundry (atau nama lain terserah anda)
3. Di dalam projek yang sudah diclone copy lah file .env.example di folder yang sama.
4. Gantilah nama file copy tersebut ke nama .env
5. Ubah file .env Arahkan pada database yang telah dibuat. Isikan sesuai dengan database Anda. Pastikan semuanya benar.
```sh
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3307
    DB_DATABASE=laundry
    DB_USERNAME=root
    DB_PASSWORD=
```
6. Melalui cmd jalankan perintah berikut(posisi cmd harus dalam folder projek)
```sh
    composer update
```
7. Generate key aplikasi dengan perintah berikut di cmd.
```sh
    php artisan key:generate
```
8. Jalankan terlebih dahulu Xampp di perangkat. Lalu start pada php dan mysql.
9. Jalankan perintah berikut di cmd.
```sh
    composer dump-autoload
```
10. Lalu jalankan perintah berikut di cmd untuk membuat isian data aplikasi awal.
```sh
    php artisan migrate --seed
```
11. Pastikan Database telah terisi dengan sejumlah table dan isian data table.
12. Copy semua file Gambar di forder public/images dan paste-kan di forder storage/app/public/images
13. Lalu jalankan perintah berikut di cmd.
```sh
    php artisan storage:link
```
14. Lalu jalankan aplikasi dengan perintah berikut di cmd.
```sh
    php artisan serve
```
15. Buka pada web broser url berikut localhost:8000
```sh
    localhost:8000
```

## Pengguna/User
1. Masuk sebagai Admin dengan email dan sandi berikut :
```sh
    Email : super.admin@gmail.com Password: 123456789 atau 
    Email : admin@gmail.com Password: 123456789
```
2. Masuk sebagai Pelanggan dengan email dan sandi berikut :
```sh
    Email : steve@gmail.com Password: 123456789 atau 
    Email : brook@gmail.com Password: 123456789 atau 
    Email : main@gmail.com Password: 123456789
```

