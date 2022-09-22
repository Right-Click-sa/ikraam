<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\Initiative;

class InitiativeOutput extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['output'];
    protected $fillable = ['output:en', 'output:ar'];

    public function committee()
    {
        return $this->belongsTo(Initiative::class, 'output_id');
    }
}
