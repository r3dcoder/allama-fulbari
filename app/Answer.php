<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'answer', 'user_id', 'question_id',
    ];

    public function qustion(){

        return $this->belongsTo('App\Question');

    }
      public function user(){

        return $this->belongsTo('App\User');
    }
}
