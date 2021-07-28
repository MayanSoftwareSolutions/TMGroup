<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\IncidentLog;

class IncidentUpdates extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function log()
    {
        return $this->belongsTo(IncidentLog::class);
    }
}
