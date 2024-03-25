<?php

namespace App\Services;

use App\Models\User;

class UserService
{

    function getById($id)
    {
        return User::findOrFail($id);
    }

    function getUsers()
    {
        return User::paginate();
    }

    function save($data, $id = null)
    {
        if(!$id) {
            return User::create($data);   
        }

        $user = User::findOrFail($id);

        $user->fill($data);
        $user->save();

        return $user;
    }

    function delete($id)
    {
        $user = $this->getById($id);

        $user->delete();
    }

}