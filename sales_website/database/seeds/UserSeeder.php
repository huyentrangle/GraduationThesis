<?php

use Illuminate\Database\Seeder;

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
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'fullName' => 'Huyen Trang',
            'address' => 'Ha Noi',
            'phoneNumber' => '0356653301',
            'level' => 1
        ]);
    }
}
