<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'user_id',
        'google_review_url',
        'reply_to_email',
        'email_signature'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
