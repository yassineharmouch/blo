<?php

namespace App\Policies;

use App\User;
use App\Offre;
use Illuminate\Auth\Access\HandlesAuthorization;

class OffrePolicy
{
    use HandlesAuthorization;
    public function before($user,$ability){
        
        if($user->role_id==3 && $ability!='delete' && $ability!='update' ){
            return true;
        }
    }
    /**
     * Determine whether the user can view any offres.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the offre.
     *
     * @param  \App\User  $user
     * @param  \App\Offre  $offre
     * @return mixed
     */
    public function view(User $user, Offre $offre)
    {
        return true ;
    }

    /**
     * Determine whether the user can create offres.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true ;
    }

    /**
     * Determine whether the user can update the offre.
     *
     * @param  \App\User  $user
     * @param  \App\Offre  $offre
     * @return mixed
     */
    public function update(User $user, Offre $offre)
    {
        return $user->id === $offre->user_id;
    }

    /**
     * Determine whether the user can delete the offre.
     *
     * @param  \App\User  $user
     * @param  \App\Offre  $offre
     * @return mixed
     */
    public function delete(User $user, Offre $offre)
    {
        return $user->id === $offre->user_id;
    }

    /**
     * Determine whether the user can restore the offre.
     *
     * @param  \App\User  $user
     * @param  \App\Offre  $offre
     * @return mixed
     */
    public function restore(User $user, Offre $offre)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the offre.
     *
     * @param  \App\User  $user
     * @param  \App\Offre  $offre
     * @return mixed
     */
    public function forceDelete(User $user, Offre $offre)
    {
        //
    }
}
