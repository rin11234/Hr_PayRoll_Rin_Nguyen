<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacationDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'year',
        'total_vacation_days',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
