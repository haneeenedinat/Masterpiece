<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ClothSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cloths')->insert([
      [
        'cloth_name'=>'trouser',
        'cloth_img'=>'https://img.bestdealplus.com/ae04/kf/H6eab9d215f69452a931e993f8a6e2466S.jpg',
        'cloth_description'=>'trouser trouser trouser',
        'categorie_id'=>'3',
        'user_id'=>'1',
      ],
      [
        'cloth_name'=>'trouser',
        'cloth_img'=>'https://img.bestdealplus.com/ae04/kf/H6eab9d215f69452a931e993f8a6e2466S.jpg',
        'cloth_description'=>'trouser trouser trouser',
        'categorie_id'=>'3',
        'user_id'=>'1',
      ],
      [
        'cloth_name'=>'trouser',
        'cloth_img'=>'https://img.bestdealplus.com/ae04/kf/H6eab9d215f69452a931e993f8a6e2466S.jpg',
        'cloth_description'=>'trouser trouser trouser',
        'categorie_id'=>'1',
        'user_id'=>'1',
      ],
      [
        'cloth_name'=>'trouser',
        'cloth_img'=>'https://img.bestdealplus.com/ae04/kf/H6eab9d215f69452a931e993f8a6e2466S.jpg',
        'cloth_description'=>'trouser trouser trouser',
        'categorie_id'=>'2',
        'user_id'=>'1',
      ],
      ]);
    }
}
