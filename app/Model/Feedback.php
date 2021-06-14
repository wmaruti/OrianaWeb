<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    protected $primaryKey = 'id';
    protected $fillable = ['name','phone','email','subject','message'];

  
    public function services(){
      return $this->belongsTo('App\Services');
    }
}
