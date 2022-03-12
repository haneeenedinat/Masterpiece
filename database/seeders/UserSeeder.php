<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
        [
            'name'=>'haneen',
            'email'=>'haneen@gmail.com',
            'password'=>'123456789',
            'role'=>'admin',
            'phone'=>'0777777777',
         ],
         // [
         //    'name'=>'eman',
         //    'email'=>'eman@gmail.com',
         //    'password'=>'123456789',
         //    'role'=>'user',
         //    'phone'=>'0777777777',
         // ],
         // [
         //    'name'=>'zaid',
         //    'email'=>'zaid@gmail.com',
         //    'password'=>'123456789',
         //    'role'=>'user',
         //    'phone'=>'0777777777',

         // ],
         // [
         //    'name'=>'tharaa',
         //    'email'=>'tharaa@gmail.com',
         //    'password'=>'123456789',
         //    'role'=>'user',
         //    'phone'=>'0777777777',

         // ],
         ]);
    }
}
