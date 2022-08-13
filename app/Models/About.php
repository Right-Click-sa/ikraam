<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\AboutValue;

class About extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['about', 'vision', 'message', 'goals', 'strategy'];
    protected $fillable = ['about_image', 'about:en', 'about:ar', 'vision:en', 'vision:ar', 'message:en', 'message:ar', 'goals_image', 'goals:en', 'goals:ar', 'strategy_image', 'strategy:en', 'strategy:ar',];

    public function values()
    {
    	 return $this->hasMany(AboutValue::class);
    }
}
