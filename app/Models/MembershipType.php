<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use App\Models\MembershipRequest;

class MembershipType extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['type'];
    protected $fillable = ['type:en', 'type:ar'];

    public function membership_requests()
    {
    	 return $this->hasMany(MembershipRequest::class);
    }
}
