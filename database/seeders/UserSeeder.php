<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            DB::table('users')->insert([
                'nome' => 'Ariane Nolasco',
                'email' => 'ariane_nolasco@icloud.com',
                'password' => Hash::make('Ohana_2119'),
            ]);
    }
}
