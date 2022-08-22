<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MembershipType;
use App\Models\Gender;

class MembershipRequest extends Model
{
    use HasFactory;

    protected $fillable = ['gender_id', 'membership_id', 'identification_number', 'name', 'city', 'phone'];

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }

    public function membership_type()
    {
        return $this->belongsTo(MembershipType::class, 'membership_id');
    }
}
