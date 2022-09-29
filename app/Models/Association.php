<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Domains\Auth\Models\User;
use App\Models\OrderRequest;

class Association extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['name', 'city', 'activity', 'executive_director', 'administrative_officer', 'chairman'];

    protected $fillable = ['user_id', 'image', 'name:en', 'name:ar', 'website', 'city:en', 'city:ar', 'activity:en', 'activity:ar', 'executive_director:en', 'executive_director:ar', 'administrative_officer:en', 'administrative_officer:ar', 'chairman:en', 'chairman:ar', 'email', 'founding', 'license', 'file', 'administrative_officer_number', 'executive_director_number'];

    public function user()
    {
    	 return $this->belongsTo(User::class, 'user_id');
    }

    public function requests()
    {
    	 return $this->hasMany(OrderRequest::class);
    }
}
