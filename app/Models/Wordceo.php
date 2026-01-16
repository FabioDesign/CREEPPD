<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wordceo extends Model
{
    public $table = 'wordceo';
    
    protected $fillable = [
        'status',
        'libelle',
        'filename',
    ];
    
    public $timestamps = false;
}
