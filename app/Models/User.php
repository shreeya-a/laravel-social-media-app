<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    //fillable ma db ko title ko naam hunu parcha
    protected $fillable= ['name','email','password'];
}
