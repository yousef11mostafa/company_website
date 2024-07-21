<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $data='services';
        protected $fillable=[
        'name',
        'position',
        'facebook',
        'twiter',
        'linked_in',
        'img'
    ];

     protected $guard=['id'];

    public $timestamps = true;

}
