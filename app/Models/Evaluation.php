<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
        'employee_id',
        'goal_id',
        'progress'
    ];

    public function getCreatedAtAttribute($value): string
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y H:i:s');
    }

    public function getUpdatedAtAttribute($value): string
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y H:i:s');
    }

}
