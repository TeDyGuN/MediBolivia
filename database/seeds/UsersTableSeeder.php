<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Rafael Elias',
          'email' => 'fuse@flash.net',
          'username' => 'rafalias',
          'password' => bcrypt('rafalias')
      ]);
    }
}
