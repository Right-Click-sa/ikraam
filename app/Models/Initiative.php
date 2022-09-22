<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\InitiativeOutput;

class Initiative extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['title', 'initiative'];
    protected $fillable = ['title:en', 'title:ar', 'initiative:en', 'initiative:ar'];

    public function outputs()
    {
    	 return $this->hasMany(InitiativeOutput::class);
    }
}
