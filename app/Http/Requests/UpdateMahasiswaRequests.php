<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMahasiswaRequests extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        //praktikum4
        return [
            'Nim' => 'required|min:10',
            'Nama'=> 'required',
            'Jurusan'=> 'required',
            'NoHp'=> 'required|min:12',
            'kelas_id'=> 'required',
        ];
    }
}
