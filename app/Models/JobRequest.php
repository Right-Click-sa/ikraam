<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;
use App\Models\Gender;

class JobRequest extends Model
{
    use HasFactory;

    protected $fillable = ['gender_id', 'job_id', 'identification_number', 'name', 'age', 'phone', 'specialization', 'file'];

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
