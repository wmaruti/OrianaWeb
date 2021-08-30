<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table = 'jobs';
    protected $primaryKey = 'id';
    protected $fillable = ['job_name', 'job_position', 'category', 'location', 'job_detail', 'status'];

    public function multipleuploads()
    {
        return $this->BelongsTo(Multipleuploads::class,'jobs_id');
    }
}
