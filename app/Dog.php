<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'age',
        'genre',
        'chip_number',
        'race',
        'post_title',
        'image',
        'size',
        'adopted',
        'description',
        'particular_sign',
        'check_in',
        'check_out',
    ];
}
