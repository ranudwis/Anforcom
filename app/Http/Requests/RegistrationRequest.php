<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'competition_id' => 'required|exists:competitions,id',
            'university' => 'required',
            'team_name' => 'required',
            'leader_name' => 'required',
            'leader_email' => 'required|unique:users,email',
            'password' => 'required',
            'leader_nim' => 'required',
            'leader_ktm' => 'required|image',
            'members' => 'required',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $data = $validator->valid();

            foreach ($data['members'] as $i => $member) {
                if (!$member['name']) {
                    $validator->errors()->add($i . 'name', 'Nama harus diisi');
                }

                if (!$member['email']) {
                    $validator->errors()->add($i . 'email', 'Email harus diisi');
                }

                if (!$member['contact']) {
                    $validator->errors()->add($i . 'contact', 'Line / WA harus diisi');
                }

                // if (! $member['ktm']) {
                //     $validator->errors()->add($i . 'ktm', 'KTM harus diisi');
                // }
            }
        });
    }

    public function messages()
    {
        return [
            'university.required' => 'Nama universitas harus diisi',
            'team_name.required' => 'Nama tim harus diisi',
            'leader_name.required' => 'Nama ketua harus diisi',
            'leader_email.required' => 'Email ketua harus diisi',
            'password.required' => 'Password harus diisi',
            'password.confirmed' => 'Konfirmasi password harus sama dengan password',
            'leader_nim' => 'NIM ketua harus diisi',
            // 'leader_ktm' => 'KTM ketua harus diisi',
            'members.required' => 'Harus memiliki anggota',
        ];
    }
}
