<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'may',
            'email' => 'may@example.com',
            'password' => Hash::make('password'),
            'role' => 'siswa',
        ]);
    
        Siswa::create([
            'user_id' => $user->id,
            'kelas' => 'X 1',
        ]);
    }
}
