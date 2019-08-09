<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    //
   protected $fillable = ['nome', 'email', 'telefone',];

   public function user()
     {
         return $this->belongsTo(User::class);
     }

}
