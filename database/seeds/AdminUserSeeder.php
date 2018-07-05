<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_tbl')->insert([
            'user_name' => 'jajasaya22',
            'password' => bcrypt('lowell123'),
            'first_name' => 'John Lowell',
            'middle_name' => 'Isanan',
            'last_name' => 'Villegas',
            'gender' => 1,
            'email' => 'lowellvillegas256@gmail.com',
            'user_type' => 0,
            'account_status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
