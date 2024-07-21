<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testmonial extends Model
{
    use HasFactory;

    protected $data='services';
        protected $fillable=[
        'name',
        'position',
        'description',
        'img'
    ];

     protected $guard=['id'];

    public $timestamps = true;

}
