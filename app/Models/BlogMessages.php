<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogMessages extends Model
{
    use HasFactory;

    protected $fillable = [
        'unique_id',
        'posted_by',
        'subject',
        'content',
        'half_content',
        'image'
    ];

    public $incrementing = false;
    protected $keyType = 'string';
}
