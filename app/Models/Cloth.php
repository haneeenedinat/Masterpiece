<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Category;

class Cloth extends Model
{
    use HasFactory;

    protected $fillable=[
        'cloth_name',
        'cloth_img',
        'cloth_description', 
        'categorie_id'   ,
        'size',
        'available',
        'user_id' 
    ];

    public function categories(){
        return $this->belongsTo(Category::class);
    }


    public function users(){
        return $this->belongsTo(Cloth::class);
    }
}
