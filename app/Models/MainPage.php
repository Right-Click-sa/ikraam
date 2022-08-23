<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPage extends Model
{
    use HasFactory;

    protected $fillable = ['video_link', 'programs_number', 'associations_number', 'initiatives_number', 'year1', 'year1_cases', 'year2', 'year2_cases', 'year3', 'year3_cases', 'tombs_number', 'washbasins_number'];
}
