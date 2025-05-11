<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'package', 'start_date', 'end_date', 'status'
    ];

    protected $dates = ['start_date', 'end_date'];

    // Menentukan hubungan dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
