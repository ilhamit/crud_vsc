Note
1. instal XAMPP, composer, laravel, visula studio code
2. dalam pembuatan CRUD siapkan data base di laravel dan cari file env
3. membuat warga model dan migrasi buka command prompt dan jalankan kode (php artisan make:model warga -m) untuk membuat file model dan migrasi
4. buka file creat_warga_table.php pada direktor laravel/data base/migration
 public function up()
    {
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik')->nullable();
            $table->string('no_kk')->nulllable();
            $table->enum('jenis_kelamin',['L','P']);
            $table->text('alamat');
            $table->timestamps();
        });
    }
5. kemudian kembali ke command prompt dan jalankan perintah (php artisan migrate) untuk membuat table ke data base
6. buat rute untuk aplikasi laravel CRUD buka file web php. dari direktor rute aplikasi laravel CRUD.
7. membuat CRUD controller dengan menggunakan artisan command
8. Setelah itu, kunjungi di app/Http/controllers dan buka file wargaController.php.
9.Buat Blade Views File Buat direktori dan beberapa blade views, Buat Nama warga Directory, blade.php
10. buka command prompt dan jalankan perintah untuk memulai server pengembangan

catatan: dalam pengerjaan ini saya kurang memahami yang saya kerjakan hingga dalam pengerjaan saya sering menemukan ke eroran
saya melihat pengerjaan (CRUD) ini mengikuti tutorial di youtube https://youtube.com/playlist?list=PLOpjxspexSIkCQNhoW8mKpQqXBgqPalxj 
dan minta bantuan keteman kelas ketika saya kebingungan mohon maaf apabila ada kesalahan
