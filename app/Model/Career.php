<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'jobs';
    protected $fillable = ['job_name', 'job_position', 'category', 'location', 'job_detail', 'applican_data'];
}
