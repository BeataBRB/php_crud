<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractClass extends Model
{
    use HasFactory;

    
    abstract public function getWelcome();
    
}
