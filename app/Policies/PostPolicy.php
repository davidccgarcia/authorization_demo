<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Gate as GateContract;

class PostPolicy
{
    use HandlesAuthorization;

    public function update($user, $post)
    {
        return $user->isAuthor($post);
    }
}
