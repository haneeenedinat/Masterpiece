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
        'cloth_img'=>'clothes.jpeg',
        'cloth_description'=>'trouser trouser trouser',
        'categorie_id'=>'3',
        'size'=>'L',
        'available'=>'yes',
        'user_id'=>'1',
      ],
      [
        'cloth_name'=>'trouser',
        'cloth_img'=>'clothes2.jpg',
        'cloth_description'=>'trouser trouser trouser',
        'categorie_id'=>'3',
        'size'=>'M',
        'available'=>'yes',
        'user_id'=>'1',
      ],
      [
        'cloth_name'=>'trouser',
        'cloth_img'=>'clothes4.jpg',
        'cloth_description'=>'trouser trouser trouser',
        'categorie_id'=>'1',
        'size'=>'XL',
        'available'=>'yes',
        'user_id'=>'1',
      ],
      [
        'cloth_name'=>'trouser',
        'cloth_img'=>'ContactUs2.png',
        'cloth_description'=>'trouser trouser trouser',
        'categorie_id'=>'2',
        'size'=>'S',
        'available'=>'yes',
        'user_id'=>'1',
      ],
      ]);
    }
}
