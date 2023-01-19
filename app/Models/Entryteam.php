<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entryteam extends Model
{
    protected $fillable = [
        'team',
        'coach' ,
        'player1',
        'player2',
        'player3',
        'player4',
        'player5',
    ];
    protected $dates =  ['created_at', 'updated_at'];
}
