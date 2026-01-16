<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sendmail extends Model
{
    public $table = 'sendmail';
    
    protected $fillable = [
        'email',
        'status',
        'subject',
        'comment',
        'username',
    ];
}