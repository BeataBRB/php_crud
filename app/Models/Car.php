<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model\AbstractClass;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [

        'brand', 'production'

    ];

   // public function getWelcome(){
   //  echo "Witamy w aplikacji!<br>";
   // }

   //public function getWelcome()
   //{
   //     return $this->belongsTo('App\Models\AbstractClass');
   //}
    
}

//$cat = new Car();
//echo "<br>";
//echo $cat->getWelcome();