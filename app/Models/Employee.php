<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'name',
        'gender',
        'ethnicity',
        'employment_type',
        'shareholder',
        'hire_date',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function earnings()
    {
        return $this->hasMany(Earning::class);
    }

    public function vacationDays()
    {
        return $this->hasMany(VacationDay::class);
    }

    public function benefits()
    {
        return $this->hasMany(Benefit::class);
    }

    public function alerts()
    {
        return $this->hasMany(Alert::class);
    }
}
