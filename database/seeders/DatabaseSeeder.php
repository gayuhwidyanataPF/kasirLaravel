<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use app\Models\JenisBarang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\JenisBarang::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('user_rules')->insert([
            'rule' => 'admin'
        ]);

        DB::table('user_rules')->insert([
            'rule' => 'gudang'
        ]);

        DB::table('user_rules')->insert([
            'rule' => 'kasir'
        ]);

        \App\Models\Users::create([
            'name' => 'Admin',
            'username' => 'admin',
            'id_rule' => '1',
            'password' => Hash::make('password'),
        ]);

        \App\Models\Users::create([
            'name' => 'Pegawai Gudang',
            'username' => 'gudang',
            'id_rule' => '2',
            'password' => Hash::make('password'),
        ]);

        \App\Models\Users::create([
            'name' => 'Pegawai Kasir',
            'username' => 'kasir',
            'id_rule' => '3',
            'password' => Hash::make('password'),
        ]);
    }
}
