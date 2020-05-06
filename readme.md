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
2. Di dalam projek yang sudah diclone copy lah file .env.example di folder yang sama.
3. Gantilah nama file copy tersebut ke nama .env
4. Ubah file .env Arahkan pada database yang telah dibuat. Isikan sesuai dengan database Anda. Pastikan semuanya benar.
```sh
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3307
	DB_DATABASE=laundry
	DB_USERNAME=root
	DB_PASSWORD=
```
5. Melalui cmd jalankan perintah berikut(posisi cmd harus dalam folder projek)
```sh
    composer update
```
6. Generate key aplikasi dengan perintah berikut di cmd.
```sh
    php artisan key:generate
```
7. Jalankan perntah berikut di cmd untuk membuat isian data aplikasi awal.
```sh
    php artisan migrate --seed
```
8. Pastikan Database telah terisi dengan sejumlah table dan isian data table.
9. Lalu jalankan aplikasi dengan perintah berikut di cmd.
```sh
    php artisan serve
```
10. Buka pada web broser url berikut localhost:8000
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

