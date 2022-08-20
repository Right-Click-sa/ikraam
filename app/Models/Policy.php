<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Policy extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['policy', 'content'];
    protected $fillable = ['policy:en', 'policy:ar', 'content:en', 'content:ar', 'file'];
}
