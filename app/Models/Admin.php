<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $connection='mongodb';
    protected $collection ='admin';
    protected $fillable  = [
        'nama',
        'password',
        'level'
    ];
    // use HasFactory;
}
