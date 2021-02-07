<?php

use Illuminate\Database\Seeder;
use App\User;
use Database\Seeds\ParameterSeeder as paramKlinik;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name' => 'Taufik Hidayat',
            'username' => 'taufikhdyt17',
            'email' => 'labkes@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'superadmin',
        ]);
        $this->call([
            ParameterSeeder::class
        ]);
    }
}
