<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'alert_type',
        'alert_condition',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
