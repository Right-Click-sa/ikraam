<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\JobRequest;

class Job extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['job', 'description'];
    protected $fillable = ['job:en', 'job:ar', 'description:en', 'description:ar'];

    public function requests()
    {
    	 return $this->hasMany(JobRequest::class);
    }
}
