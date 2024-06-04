1. Clone projek ini
2. Simpan pada folder `C:\laragon\www\`
3. Buka terminal dari folder projek tersebut, jalankan `composer install`
4. Karena laravel 11 default databasenya `sqlite` dan minimal versi `php 8.3`, maka pastikan ekstensi `pdo_sqlite` dan `sqlite3` sudah aktif
   ![image](https://github.com/DedeSnrwn13/tugas-pert-10-web-2/assets/46914100/c554e5fa-dfcf-4446-b601-82e1f55f58da)

6. Jalankan `php artisan migrate` dan jalankan `php artisan serve`
7. Buka `http://127.0.0.1:8000/` pada browser
