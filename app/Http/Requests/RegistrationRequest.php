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
            'university' => 'required',
            'team_name' => 'required',
            'leader_nim' => 'required',
            'leader_ktm' => 'required|image',
            'members' => 'required',
        ];
    }

    /**
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $data = $validator->valid();

            foreach ($data['members'] as $i => $member) {
                if (! isset($member['name']) || ! $member['name']) {
                    $validator->errors()->add($i . 'name', 'Nama harus diisi');
                }

                if (! isset($member['email']) || ! $member['email']) {
                    $validator->errors()->add($i . 'email', 'Email harus diisi');
                }

                if (! isset($member['contact']) || ! $member['contact']) {
                    $validator->errors()->add($i . 'contact', 'Line / WA harus diisi');
                }

                if (! isset($member['ktm']) || ! $member['ktm']) {
                    $validator->errors()->add($i . 'ktm', 'KTM harus diisi');
                }
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
            'loader_contact.required' => 'Line / WA ketua harus diisi',
            'password.required' => 'Password harus diisi',
            'password.confirmed' => 'Konfirmasi password harus sama dengan password',
            'leader_nim.required' => 'NIM ketua harus diisi',
            'leader_ktm.required' => 'KTM ketua harus diisi',
            'members.required' => 'Harus memiliki anggota',
        ];
    }
}
