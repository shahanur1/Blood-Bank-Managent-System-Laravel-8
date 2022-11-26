<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Admin', 'email' => 'admin@shagor.xyz', 'phone' =>'01885738929', 'password' => bcrypt('password'), 'is_admin' => 1]);
    }
}
