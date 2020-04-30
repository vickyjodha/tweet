<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Userpolicy
{
    use HandlesAuthorization;

    public function edit(User $currentUser,User $user)
    {
         return $currentUser->is($user);
    }
}
