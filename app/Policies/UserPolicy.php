<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function manage(User $user)
    {
        return $user->isAdm();
    }

    public function update(User $authenticated, User $target)
    {
        return $authenticated->id === $target->id || $authenticated->isAdm();
    }
}
