<?php

namespace App\Models;

use App\Observers\RoleObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;

class Role extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'title'
    ];


    //User Relationship
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // Permission Relationship
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
