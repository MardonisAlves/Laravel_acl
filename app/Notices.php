<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notices extends Model
{
   public  function user(){
       //Relacionmaneto de Um para Muitos 
       return $this->belongsTo(User::class);
   }
}
