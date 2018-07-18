<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Let's truncate our existing records to start from scratch.
      \App\User::truncate();

      $faker = \Faker\Factory::create();

      $password = Hash::make('toptal');

      \App\User::create([
           'name' => 'Administrator',
           'email' => 'admin@test.com',
           'password' => $password,
       ]);
      // And now, let's create a few articles in our database:
      for ($i = 0; $i < 10; $i++) {
          \App\User::create([
              'name' => $faker->name,
              'email' => $faker->email,
              'password' => $password,
          ]);
      }
    }
}
