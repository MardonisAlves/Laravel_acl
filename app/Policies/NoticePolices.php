<?php

namespace App\Policies;

use App\User;
use App\Notices;
use Illuminate\Auth\Access\HandlesAuthorization;

class NoticePolices
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
public function updatePost(User $user , Notices $notices){
    
    return $user->id == $notices->user_id;
}
}
