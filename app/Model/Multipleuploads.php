<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Multipleuploads extends Model
{
    protected $table ='multiuploads';
    protected $primaryKey = 'id';
    protected $fillable = array('filename','jobs_id','created_at','updated_at');

   
  public function jobs(){
    //setiap profil memiliki satu mahasiswa
    // return $this->hasOne('App\Model\Jobs', 'id' );
    return $this->BelongsTo(Jobs::class);
  }
}
