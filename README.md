<h1>Subscription App Laravel 12</h1>
<h3>Deskripsi</h3>
<p>Aplikasi langganan berbasis Laravel dengan 3 pilihan paket: A, B, dan C. Paket A berlaku selama 30 hari, Paket B selama 60 hari, dan Paket C selama 90 hari. Setelah masa aktif paket habis, status langganan pengguna akan berubah menjadi "tidak berlangganan".</p>
<h3>Fitur</h3>
<li>Menyimpan data langganan ke dalam tabel subscriptions</li>
<li>Perubahan status otomatis setelah masa aktif habis menggunakan Laravel Jobs</li>
<li>Melihat daftar langganan aktif</li>
<h3>Instalasi</h3>
<li>composer install</li>
<li>cp .env.example .env</li>
<li>DB_CONNECTION=mysql</li>
<li>DB_HOST=127.0.0.1</li>
<li>DB_PORT=3306</li>
<li>DB_DATABASE=laravel_example</li>
<li>DB_USERNAME=root</li>
<li>DB_PASSWORD=</li>
<li>php artisan queue:work</li>
<li>php artisan schedule:work</li>
<li>php artisan migrate</li>
<li>php artisan serve</li>
