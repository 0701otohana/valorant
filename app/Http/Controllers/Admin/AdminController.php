<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Entryteam;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->Entryteam = new Entryteam();
    }

    public function Adminmain() 
    {
        if(!auth()->check()){
            return redirect('admin/Adminlogin');
        }
        $Entryteams = $this->Entryteam->all();

        return view('Auth.Adminmain', compact('Entryteams'));
    }

    public function edit($id)
    {
        $Entryteam = Entryteam::find($id);

        return view('Auth.EntryteamEdit', compact('Entryteam'));
    }

    /**
     * 更新処理
     */
    public function update(Request $request, $id)
    {
        $Entryteam = Entryteam::find($id);
        $Entryteam->team = $request->input('team');
        $Entryteam->coach = $request->input('coach');
        $Entryteam->player1 = $request->input('player1');
        $Entryteam->player2 = $request->input('player2');
        $Entryteam->player3 = $request->input('player3');
        $Entryteam->player4 = $request->input('player4');
        $Entryteam->player5 = $request->input('player5');
        
        $Entryteam->save();
        
        return redirect('complete');
    }

    /**
     * 削除処理
     */
    public function Delete($id)
    {
        $Entryteam = Entryteam::find($id);
        // レコードを削除
        $Entryteam->delete();
        // 削除したら一覧画面にリダイレクト
        return redirect('admin/Adminmain');
    }
}
