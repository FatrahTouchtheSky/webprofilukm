<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminData = [
            [
                'name' => 'Admin 1',
                'email' => 'admin1@example.com',
                'password' => bcrypt('password123'), // Gunakan bcrypt() untuk mengenkripsi password
            ],
            [
                'name' => 'Admin 2',
                'email' => 'admin2@example.com',
                'password' => bcrypt('password456'),
            ],
            // Tambahkan data admin lainnya sesuai kebutuhan
        ];

        // Masukkan data admin ke dalam tabel menggunakan Eloquent
        foreach ($adminData as $admin) {
            Admin::create($admin);
        }
    }
}
