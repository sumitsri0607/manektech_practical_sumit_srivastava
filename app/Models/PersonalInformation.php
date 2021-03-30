<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;
    protected $table = 'personal_information';

    protected $fillable = [
        'first_name', 'last_name', 'designation', 'email', 'phone', 'address_line_1', 'address_line_2', 'state_id', 'city_id', 'country_id', 'pincode', 'gender', 'dob'
    ];
}
