<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $data='settings';
        protected $fillable=[
        'name',
        'email',
        'position',
        'address',
        'company',
        'zip',
        'secondname',
        'state',
        'img',
        'facebook',
        'twiter',
        'linked_in',
        'github',
    ];

     protected $guard=['id'];

    public $timestamps = true;

}
