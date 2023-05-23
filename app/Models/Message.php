<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['sender', 'receiver', 'title', 'message', 'read', 'sent_at'];
    use HasFactory;
}
