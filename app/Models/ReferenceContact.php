<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferenceContact extends Model
{
    use HasFactory;

    protected $table = 'reference_contact';

    protected $fillable = [
        'personal_information_id', 'name', 'contact_number', 'relation',
    ];
}
