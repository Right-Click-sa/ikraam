<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\OrderRequest;

class OrderType extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['type'];
    protected $fillable = ['type:en', 'type:ar'];

    public function requests()
    {
    	 return $this->hasMany(OrderRequest::class);
    }
}
