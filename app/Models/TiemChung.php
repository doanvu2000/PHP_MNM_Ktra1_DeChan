<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiemChung extends Model
{
    use HasFactory;
    protected $table = 'tiemchungs';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'address',
        'priority'
    ];
}
