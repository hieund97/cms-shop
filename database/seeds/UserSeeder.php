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
            'name'       => 'Nguyễn Đức Hiếu',
            'email'      => 'duchieu97.hn@gmail.com',
            'password'   => bcrypt(123456),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name'       => 'Tony Stark',
            'email'      => 'stark@gmail.com',
            'password'   => bcrypt(123456),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name'       => 'Steve Rodger',
            'email'      => 'captain@gmail.com',
            'password'   => bcrypt(123456),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name'       => 'Thanos',
            'email'      => 'thanos@gmail.com',
            'password'   => bcrypt(123456),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
