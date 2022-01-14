<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Category;
use App\Models\CategoryShare;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    // public function create(User $user, Category $list)
    // {
    //     return $user->id === $list->user_id;
    // }

    public function show(User $user, Category $list)
    {
        return ($user->id === $list->user_id || CategoryShare::where('user_id', $user->id)->where('category_id', $list->id)->first() !== null);
    }

    public function update(User $user, Category $list)
    {
        return $user->id === $list->user_id;
    }

    public function delete(User $user, Category $list)
    {
        return $user->id === $list->user_id;
    }
}
