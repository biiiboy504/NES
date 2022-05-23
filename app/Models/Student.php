<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Student extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'zip_code',
        'contact_num',
        'landline',
        'civil_status',
        'gender',
        'height',
        'weight',
        'citizenship',
        'birth_place',
        'birth_date',
        'age',
        'batch_num',
    ];
}
