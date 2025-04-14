<?php
namespace App\Services;

use App\DAOs\UserDAO;
use App\BOs\UserBO;
use Illuminate\Support\Facades\Cache; 
// comes automatically from composer and no need to include in our folder structure.

class UserService
{
    protected $userDAO;
    protected $userBO;

    public function __construct(UserDAO $userDAO, UserBO $userBO)
    {
        $this->userDAO = $userDAO;
        $this->userBO = $userBO;
    }

    public function getUserById($id)
    {
        return Cache::remember("user_{$id}", 3600, function () use ($id) {
            return $this->userDAO->findById($id);
        });
    }

    public function getAllUsers()
    {
        return Cache::remember("users_all", 3600, function () {
            return $this->userDAO->findAll();
        });
    }

    public function createUser(array $data)
    {
        $preparedData = $this->userBO->prepareUserData($data);
        $user = $this->userDAO->create($preparedData);
        Cache::forget('users_all');
        return $user;
    }

    public function updateUser($id, array $data)
    {
        $user = $this->userDAO->findById($id);
        $preparedData = $this->userBO->prepareUserData($data);
        $updatedUser = $this->userDAO->update($user, $preparedData);
        Cache::forget("user_{$id}");
        Cache::forget("users_all");
        return $updatedUser;
    }
}

/**
 * CODE AUTHOR: AADYA PARASAR
 */
