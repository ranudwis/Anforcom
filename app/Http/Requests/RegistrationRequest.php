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

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $data = $validator->valid();

            for ($i = 0; $i < 2; $i++) {
                $number = $i + 1;
                $member = $data['members'][$i];

                if ($number === 2 && $this->isMemberFieldInvalid($member, 'name')) {
                    break;
                }

                $this->validateMemberData($member, $validator, $i, [
                    'name' =>  'Nama anggota ke-' . $number . ' harus diisi',
                    'email' => 'Email anggota ke-' . $number . ' harus diisi',
                    'contact' => 'Line / WA anggota ke-' . $number . ' harus diisi',
                    'ktm' => 'KTM anggota ke-' . $number . ' harus diisi',
                ]);
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

    private function isMemberFieldInvalid($member, $field)
    {
        return ! isset($member[$field]) || ! $member[$field];
    }

    private function validateMemberData($member, $validator, $index, $data)
    {
        foreach ($data as $field => $error) {
            if ($this->isMemberFieldInvalid($member, $field)) {
                $validator->errors()->add("members[$index][{$field}]", $error);
            }
        }
    }
}
