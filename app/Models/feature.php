<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feature extends Model
{
    use HasFactory;

    protected $data='features';
        protected $fillable=[
        'title',
        'description',
        'img'
    ];

     protected $guard=['id'];

    public $timestamps = true;

}
