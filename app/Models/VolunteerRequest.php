<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gender;
use App\Models\Location;
use App\Models\VolunteerField;

class VolunteerRequest extends Model
{
    use HasFactory;

    protected $fillable = ['gender_id', 'location_id', 'field_id', 'name', 'email', 'phone', 'age'];

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function field()
    {
        return $this->belongsTo(VolunteerField::class, 'field_id');
    }
}
