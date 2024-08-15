<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AccessPolicy
{
    // /**
    //  * Create a new policy instance.
    //  */
    // public function __construct()
    // {
    //     //
    // }
    /**
     * Determine if the user can view the profile button.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function viewProfileButton(User $user)
    {
        return in_array($user->role_id, [1, 2]);
    }
}
