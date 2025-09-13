<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\BerandaGaleri;
use App\Models\User;

class BerandaGaleriPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, BerandaGaleri $berandaGaleri): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, BerandaGaleri $berandaGaleri): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, BerandaGaleri $berandaGaleri): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, BerandaGaleri $berandaGaleri): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, BerandaGaleri $berandaGaleri): bool
    {
        return false;
    }
}
