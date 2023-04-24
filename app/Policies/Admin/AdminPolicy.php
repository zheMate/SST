<?php

namespace App\Policies\Admin;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    public function view(User $user, User $authUser)
    {
        return $authUser->role == User::ROLE_ADMIN;
    }
}