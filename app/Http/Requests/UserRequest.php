<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//vendor/laravel/framework/src/Illuminate/Support/Facades/Cache.php
// comes automatically from composer and no need to include in our folder structure.


class UserRequest extends FormRequest
{
    public function rules(): array
    {
        $userId = $this->route('user');

        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $userId,
            'password' => $this->isMethod('post') ? 'required|min:6' : 'nullable|min:6', //Validation condition for password

        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

/**
 * CODE AUTHOR: AADYA PARASAR
 */
