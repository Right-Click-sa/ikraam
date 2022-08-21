<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssociationRequest extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'number', 'chairman', 'founding', 'license', 'executive_director', 'location', 'objective', 'city', 'administrative_officer', 'administrative_officer_number', 'file'];
}
