<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tovari extends Model
{
   protected $fillable = ['id','name','zametka', 'opisanie', 'cena','kolvo'];
}
