<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CafeController extends Controller

{
    /**トップページ */
    public function cafe(){
        return view('cafe.index');
    }

    public function contact() {
        
        $result = DB::table('contacts')->get();
//SQL文を生成するためのメソッドをメソッドチェーンで記述することによりデーターベースを操作します。
//DB::table('テーブル名')->DBメソッドのように記述して操作します。
        return view('cafe.contact',['result' =>$result]);
    }

    /**確認画面バリデーション */
    public function confirm(Request $request)
    {
        $inputs = $request->all();

        if(!$inputs){
            return redirect()->route('index');
        }

        $request->validate([
            'name' => ['required','max:10'],
            'kana' => ['required','max:10'],
            'tel'  =>['required','nullable', 'regex:/^[0][0-9]{1,2}-{0,1}[0-9]{3,4}-{0,1}[0-9]{3,4}$/'],
            'email' =>['required','email'],
            'body' =>'required'
        ]);
        
        return view('cafe.confirm',['inputs' => $inputs,]);
    }

        /**
        * 内容をDBへ登録
        */
    public function complete(Request $request)
    {
    
        $inputs = $request->all();
    
        DB::table('contacts')->insert([
            'name' => $request['name'],
            'kana' => $request['kana'],
            'tel'  => $request['tel'],
            'email' => $request['email'],
            'body' => $request['body']
        ]);
    
        if(!$inputs){
            return redirect()->route('index');
        }
    
        return view('cafe.complete');
    }
    /**削除機能 */
    public function delete($id) {
        $result = DB::table('contacts');
        $result->find($id);
        $result->delete($id);
        
        if($result->delete($id)){
            return redirect()->route('index');
        }
        return view('cafe.delete');
    }
        
    /**編集画面 */
    public function edit($id){
        
        $result = DB::table('contacts');
        $data = $result->find($id);
        return view('cafe.edit',['data' => $data,]);
    }

    /**編集完了アップデート */
    public function update(Request $request,$id) {
    
        $data = $request->all();
        
        $request->validate([
            'name' => ['required','max:10'],
            'kana' => ['required','max:10'],
            'tel' =>['nullable', 'regex:/^[0][0-9]{1,2}-{0,1}[0-9]{3,4}-{0,1}[0-9]{3,4}$/'],
            'email' =>['required','email'],
            'body' =>'required'
        ]);
        if(!empty($date)){
            return redirect()->route('index');
        }else{
            $contacts = DB::table('contacts');
            $contacts->find($id);
        
            $contacts->update([
                'name' => $request['name'],
                'kana' => $request['kana'],
                'tel'  => $request['tel'],
                'email' => $request['email'],
                'body' => $request['body']
            ]);
        
            return view('cafe.update');
        }
    }
    
}