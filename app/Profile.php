<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{


   protected $fillable = ['user_id','title','description','url'];
   
   
   
   public function followers()
   {
    return $this->belongsToMany(User::class);
    }

   public function user()
   {
       return $this->belongsTo(User::class);
   } //
  
}
