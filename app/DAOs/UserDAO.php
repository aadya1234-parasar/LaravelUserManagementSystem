<?php
namespace App\DAOs;

use App\Models\User;

class UserDAO
{
    public function findById($id)
    {
        return User::find($id);
    }

    public function findAll()
    {
        return User::all();
    }

    public function create(array $data)
    {
        return User::create($data);
    }

    public function update(User $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    public function findByEmail(string $email)
    {
        return User::where('email', $email)->first();
    }
}


/**
 * CODE AUTHOR: AADYA PARASAR
 */

