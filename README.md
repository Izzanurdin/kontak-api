## Cara Menjalankan Project
1. `composer install`
2. Copy file `.env.example` menjadi `.env` lalu atur DB_CONNECTION ke sqlite
3. `touch database/db_kontak.sqlite`
4. `php artisan migrate`
5. `php artisan serve`