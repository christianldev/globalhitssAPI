<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function all()
    {
        return User::all();
    }

    public function find($id)
    {
        return User::find($id);
    }

    public function create(array $data)
    {
        return User::create($data);
    }

    public function update($id, array $data)
    {
        $user = User::find($id);
        if ($user) {
            $user->update($data);
        }
        return $user;
    }

    public function delete($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete(); // Esto ahora hace soft delete
        }
        return $user;
    }
}
