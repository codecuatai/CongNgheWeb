<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
    protected $table = 'computers';

    protected $fillable = [
        'id',
        'computer_name',
        'model',
        'operating_system',
        'processor',
        'memory',
        'available',
        'created_at',
        'updated_at'
    ];
}
