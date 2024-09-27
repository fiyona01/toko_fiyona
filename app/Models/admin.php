<?php

namespace App\Models;

use Illuminate\Foundation\Auth\user as authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends authenticatable
{ 
    use HasFactory;

    protected $fillable = [
        'name', 'username', 'email', 'password'
    ];    
}
