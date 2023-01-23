<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entryteam extends Model
{
    use SoftDeletes;

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
