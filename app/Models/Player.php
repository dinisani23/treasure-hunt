<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $primaryKey = 'id';

    public $table = 'player';

    protected $fillable = [
        'user_id',
        'qr',
        'code',
        'name',
        'phone',
        'c_one',
        'c_two',
        'c_three',
        'total_score',
    ];
}
