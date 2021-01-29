<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{ 
    protected $fillable = ['id','caption','image'];
   public function user(){
       return $this->belongsTo(User::class);
   } //
}
