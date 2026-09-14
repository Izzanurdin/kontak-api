# Laravel REST API - Manajemen Kontak
Tugas Pemrograman Internet Pertemuan 5 - Muhammad Izzanurdin Hasan

## Cara Menjalankan Project
1. Clone repository ini.
2. Buka terminal dan jalankan `composer install`
3. Copy file `.env.example` menjadi `.env`
4. Ubah konfigurasi database di file `.env` menjadi:
   DB_CONNECTION=sqlite
   DB_DATABASE=database/db_kontak.sqlite
5. Buat file database kosong dengan perintah: `touch database/db_kontak.sqlite`
6. Jalankan migrasi: `php artisan migrate`
7. Jalankan server: `php artisan serve`
8. Buka browser dan akses halaman tester: `http://127.0.0.1:8000/api-tester.html`