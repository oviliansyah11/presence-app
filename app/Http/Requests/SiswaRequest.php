<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Actions\Fortify\PasswordValidationRules;

class SiswaRequest extends FormRequest
{
    use PasswordValidationRules;
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
            'nisn' => ['required', 'numeric',  'unique:siswas'],
            'nama' => ['required', 'string', 'max:50'],
            'tgl_lahir' => ['required', 'date'],
            'jenis_kelamin' => ['required', 'string', 'in:Laki-laki,Perempuan'],
            'alamat' => ['required', 'string', 'max:255'],
            'no_telpon' => ['required', 'numeric'],
            'kelas_id' => ['required'],
            'password' => $this->passwordRules(),
        ];
    }
}
