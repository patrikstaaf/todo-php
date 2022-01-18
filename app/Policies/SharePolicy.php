<?php

namespace App\Policies;

use App\Models\CategoryShare;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Response;

class SharePolicy
{
    use HandlesAuthorization;

    public function delete(User $user, CategoryShare $share)
    {
        return auth()->user()->id === $share->list->user_id;
    }
}
