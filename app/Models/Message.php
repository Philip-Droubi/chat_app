<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = "chat_messages";
    protected $primaryKey = "id";
    protected $fillable = ['sender_id', 'chat_id', 'message_content'];
    protected $timestamp = true;
}
