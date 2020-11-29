<?php

namespace App\Actions\Fortify;

use App\Models\activation_codes;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

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
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'activation_code' => ['required', 'string', 'max:255',
                Rule::exists('activation_codes'),

            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
                Rule::exists('activation_codes'),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'lastname' => $input['lastname'],
            'activation_code' => $input['activation_code'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
