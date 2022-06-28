<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SistemRequest extends FormRequest
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
        return [
            'nis'=> 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'nama_orang_tua' => 'required',
            'minat' => 'required',

        ];
    }
}
