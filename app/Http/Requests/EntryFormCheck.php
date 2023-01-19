<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntryFormCheck extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'team' => 'required | max:32',
            'coach' => 'required | max:32',
            'player1' => 'required | max:32',
            'player2' => 'required | max:32',
            'player3' => 'required | max:32',
            'player4' => 'required | max:32',
            'player5' => 'required | max:32',
        ];
    }
    //laravelドキュメント バリデーション リダイレクト先のカスタマイズ
    protected $redirect = 'EntryForm';
}
