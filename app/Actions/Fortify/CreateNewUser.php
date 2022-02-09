<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        // this is in order to display the message on the register page only.
        \Illuminate\Support\Facades\Session::put('register_flag', true);

        Validator::make($input, [
            'email' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // validate for BD phone number only
            //'phone_number' => 'required|regex:/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/',
            //'phone_number' => 'required|regex:/(01)[0-9]{9}/',
            'phone_number' => 'required',
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ],
        [
            'email_required'         => "邮件地址必须要的。",
            'email_email'            => "邮件地址不确定。",
            'phone_number_required'  => "电话号码必须要的。",
        ])->validate();

        return User::create([
            'name'          => $input['name'],
            'email'         => $input['email'],
            'phone_number'  => $input['phone_number'],
            'password'      => Hash::make($input['password']),
        ]);
    }
}
