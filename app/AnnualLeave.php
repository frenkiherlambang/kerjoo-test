<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnnualLeave extends Model
{
    protected $fillable = [
        'user_id', 'start_date', 'end_date', 'reason', 'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
