<?php

namespace App\Repositories;

use App\User;

class ContatoRepository
{
    /**
     * Get all of the contacts for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return $user->contatos()
                    ->orderBy('nome', 'asc')
                    ->get();
    }
}
