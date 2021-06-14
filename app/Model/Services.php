<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'description', 'status', 'image'];

    public function feedback(){
        // return $this->belongsTo('App\Mcu', 'pegawai_id');
        return $this->hasMany('App\Feedback', 'subject');
    }
}
