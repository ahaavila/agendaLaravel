<?php

namespace App\Policies;

use App\User;
use App\Contato;

use Illuminate\Auth\Access\HandlesAuthorization;

class ContatoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function destroy(User $user, Contato $contato){
          return ($user->id === $contato->user_id);
    }

}
