<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessages extends Model
{
    use HasFactory;

    protected $fillable = [
        'message_id',
        'fname',
        'lname',
        'email',
        'message',
    ];

    public $incrementing = false;
    protected $keyType = 'string';
}
