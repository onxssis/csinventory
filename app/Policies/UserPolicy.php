<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function create(User $user, User $routeUser)
    {
        return $routeUser->hasRole('Admin');
    }
}
