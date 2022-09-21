<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssociationRequest extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'license', 'chairman', 'founding', 'executive_director', 'executive_director_number', 'website', 'activity', 'email', 'city', 'administrative_officer', 'administrative_officer_number', 'file'];
}
