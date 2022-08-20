<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\VolunteerRequest;

class Location extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['location'];
    protected $fillable = ['location:en', 'location:ar'];

    public function requests()
    {
    	 return $this->hasMany(VolunteerRequest::class);
    }
}
