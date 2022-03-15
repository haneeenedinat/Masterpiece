<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;

class Contact extends Model
{
    use HasFactory;

    protected $fillable=[
        'Message' ,
        'user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

}
