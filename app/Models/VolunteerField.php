<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\VolunteerRequest;

class VolunteerField extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['field'];
    protected $fillable = ['field:en', 'field:ar'];

    public function requests()
    {
    	 return $this->hasMany(VolunteerRequest::class);
    }
}
