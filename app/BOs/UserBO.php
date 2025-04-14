<?php
namespace App\BOs;

use Illuminate\Support\Facades\Hash;

class UserBO
{
    public function prepareUserData(array $data): array
    {
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        return $data;
    }
}

/**
 * CODE AUTHOR: AADYA PARASAR
 */
