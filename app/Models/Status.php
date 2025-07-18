<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $primaryKey = 'status_code';
    public $incrementing = false; // status_code is not auto-incrementing
    protected $keyType = 'string'; // status_code is a string

    protected $fillable = [
        'status_code',
        'status',
        'description',
    ];

    public function clients()
    {
        return $this->hasMany(Client::class, 'status_code', 'status_code');
    }
}
