<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'personal_information_id', 'ssc_name_of_board', 'ssc_passing_year', 'ssc_percentage', 'hsc_name_of_board', 'hsc_passing_year', 'hsc_percentage', 'bd_course_name', 'bd_university', 'bd_passing_year', 'bd_percentage', 'md_course_name', 'md_university', 'md_passing_year', 'md_percentage'
    ];
}
