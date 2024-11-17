<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Button extends Model
{
    use HasFactory;

    // The table associated with the model (optional if table name is 'buttons')
    protected $table = 'buttons';

    // The attributes that are mass assignable
    protected $fillable = [
        'position',
        'color',
        'link'
    ];
}
