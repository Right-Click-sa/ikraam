<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\CommitteeTask;

class Committee extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['committee_name', 'goal', 'chairman'];
    protected $fillable = ['image', 'committee_name:en', 'committee_name:ar', 'goal:en', 'goal:ar', 'chairman:en', 'chairman:ar'];

    public function tasks()
    {
    	 return $this->hasMany(CommitteeTask::class);
    }
}
