<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'date_time',
        'status_code',
    ];

    protected $casts = [
        'date_time' => 'datetime',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_code', 'status_code');
    }
}
