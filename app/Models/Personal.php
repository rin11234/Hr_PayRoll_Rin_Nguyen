<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $fillable = [
        'current_first_name',
        'current_last_name',
        'current_middle_name',
        'birth_date',
        'social_security_number',
        'drivers_license',
        'current_address_1',
        'current_address_2',
        'current_city',
        'current_country',
        'current_zip',
        'current_gender',
        'current_phone_number',
        'current_personal_email',
        'current_marital_status',
        'ethnicity',
        'shareholder_status',
        'benefit_plan_id'
    ];
}
