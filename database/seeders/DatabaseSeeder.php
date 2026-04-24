<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin Utama
        \App\Models\User::updateOrCreate(
            ['email' => 'admin@amikom.ac.id'],
            [
                'name' => 'Admin Amikom',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ]
        );

        // 2. Insert Kategori Event
        $category = \App\Models\Category::firstOrCreate(
            ['slug' => 'seminar-it'],
            ['name' => 'Seminar IT']
        );

        $category2 = \App\Models\Category::firstOrCreate(
            ['slug' => 'entertaiment'],
            ['name' => 'Entertaiment']
        );

        $category3 = \App\Models\Category::firstOrCreate([
            'name' => 'Teknologi & Kreativitas',
            'slug' => 'teknologi-kreativitas',
        ]);

        // 3. Insert Sampel Events
        \App\Models\Event::updateOrCreate(
            ['title' => 'Jazz Night 2025'],
            [
                'category_id' => $category2->id,
                'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu.',
                'date' => '2026-05-10 19:00:00',
                'location' => 'Amikom Baru',
                'price' => 50000,
                'stock' => 100,
                'poster_path' => 'posters/event-1.png',
            ]
        );

        \App\Models\Event::updateOrCreate(
            ['title' => 'Hackaton - Unleash Your Inner Developer'],
            [
                'category_id' => $category->id,
                'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif untuk tantangan masa depan!',
                'date' => '2026-05-05 10:00:00',
                'location' => 'Inkubator Amikom',
                'price' => 50000,
                'stock' => 100,
                'poster_path' => 'posters/event-2.png',
            ]
        );

        \App\Models\Event::updateOrCreate(
            ['title' => 'AI & FUTURE TECH SUMMIT 2026'],
            [
                'category_id' => $category->id,
                'description' => 'Jelajahi tren terkini dalam kecerdasan buatan dan teknologi masa depan bersama para ahli di bidangnya.',
                'date' => '2026-05-01 13:00:00',
                'location' => 'Cinema Unit 6',
                'price' => 50000,
                'stock' => 100,
                'poster_path' => 'posters/event-3.png',
            ]
        );

        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'UI/UX Masterclass: From Zero to Hero',
            'description' => 'Pelajari dasar hingga lanjutan desain UI/UX mulai dari riset pengguna, wireframing, hingga prototyping menggunakan tools modern.',
            'date' => '2026-05-15 09:00:00',
            'location' => 'Lab Multimedia Amikom',
            'price' => 75000,
            'stock' => 80,
            'poster_path' => 'posters/event-4.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'E-Sport U-Champ Tournament 2026',
            'description' => 'Turnamen e-sport antar mahasiswa dengan berbagai game populer. Tunjukkan skill terbaikmu dan menangkan hadiah menarik!',
            'date' => '2026-05-20 13:00:00',
            'location' => 'Auditorium Amikom',
            'price' => 25000,
            'stock' => 150,
            'poster_path' => 'posters/event-5.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'Startup Pitching Day & Innovation Expo',
            'description' => 'Ajang bagi mahasiswa untuk mempresentasikan ide startup dan inovasi teknologi di depan investor dan praktisi industri.',
            'date' => '2026-05-25 10:00:00',
            'location' => 'Inkubator Bisnis Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-6.png',
        ]);
    }
}