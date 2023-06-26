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
        //

        $user_test1 = [
            'username' => 'あいうえお',
            'email' => 'aaa@test.com',
            'password' => 'aiueo',
            'admin_role' => '1',
            
        ];
        DB::table('users')->insert($user_test1);

    }
}
