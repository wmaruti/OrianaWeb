<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multipleuploads extends Model
{
    protected $table ='multiuploads';
    protected $primaryKey = 'id';
    protected $fillable = array('filename','jobs_id','created_at','updated_at');
}
