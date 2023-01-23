<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EntryFormCheck;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController as BaseController;
use App\Models\Entryteam;
use Illuminate\Support\Facades\DB;

class EntryteamController extends Controller
{
    public function Entrycheck(EntryFormCheck $request) {
        $post = new Entryteam();
        $post->team = $request->team;
        $post->coach = $request->coach;
        $post->player1 = $request->player1;
        $post->player2 = $request->player2;
        $post->player3 = $request->player3;
        $post->player4 = $request->player4;
        $post->player5 = $request->player5;
        $post->save();

        return redirect('complete');
    }
}
