<?php

namespace App\Observers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use App\Notifications\RoleCreationNotification;
use App\Notifications\RoleDeletionNotification;
use App\Notifications\RoleModificationNotification;

class RoleObserver
{
    use Notifiable;

    public function created(Role $role)
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('id', 1);
        })->get();


        foreach($users as $user)
        {
            Notification::send($user, new RoleCreationNotification($role));
        }

    }


    public function updated(Role $role)
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('id', 1);
        })->get();


        foreach($users as $user)
        {
            Notification::send($user, new RoleModificationNotification($role));
        }
    }


    public function deleted(Role $role)
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('id', 1);
        })->get();

        foreach($users as $user)
        {
            Notification::send($user, new RoleDeletionNotification($role));
        }
    }


    public function restored(Role $role)
    {
        //
    }


    public function forceDeleted(Role $role)
    {
        //
    }
}
