<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new User;
        $admin->id = random_int(1, 11);
        $admin->email = 'admin@gmail.com';
        $admin->password = '$2y$10$7DsWZ/Tlj73w2ECdUDxAw.eTEUCb5YfaM./EKMfa11dzUVk5B5qc6';     //12345678
        $admin->save();
    }
}
