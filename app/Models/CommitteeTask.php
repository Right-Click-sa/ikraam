<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\Committee;

class CommitteeTask extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['task'];
    protected $fillable = ['task:en', 'task:ar'];

    public function committee()
    {
        return $this->belongsTo(Committee::class, 'committee_id');
    }
}
