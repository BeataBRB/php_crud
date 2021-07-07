<?php

namespace App\Models;

class House extends AbstractClass
{
    protected $table = 'houses';
    protected $fillable = [
        'adres', 'wlasciciel'
      ];
}
