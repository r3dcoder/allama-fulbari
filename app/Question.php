<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question', 'user_id', 'category', 
    ];

    public function answers(){

        return $this->hasMny('App\Answer');

    }
      public function user(){

        return $this->belongsTo('App\User');
    }
}
