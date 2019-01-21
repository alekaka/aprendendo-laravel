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
        $user = new \App\User();
        $user->create([
            'name' => 'Thiago',
            'email' => 'email@email.com', 
            'password' => bcrypt('1234455')
        ]);
    }
}
