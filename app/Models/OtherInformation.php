<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherInformation extends Model
{
    use HasFactory;
    protected $table = 'other_information';

    protected $fillable = [
        'personal_information_id', 'preferd_location', 'notice_period', 'current_ctc', 'expected_ctc'
    ];
}
