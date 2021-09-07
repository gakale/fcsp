<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JoueuRequest extends FormRequest
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
            'nom' => ['required'],
            'prenom' => ['required'],
            'datenais' => ['required','date'],
            'lieunais' => ['required'],
            'taille'=> ['required'],
            'poids'=> ['required'],
            'numero_maillot'=>['required'],
            'position_terrain'=>['required'],
            'details_joueurs'=>['required'],
            'photo_joueurs'=> ['required','mimes:jpg,jpeg,gif,png,video,bmp'],
            'video_joueurs'=> ['required']
        ];
    }
}
