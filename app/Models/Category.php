<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Cloth;

class Category extends Model
{
    use HasFactory;

    protected $fillable=[
        'categorie_name'
    ];

    public function cloths(){
        return $this->hasMany(Cloth::class);
    }
}
