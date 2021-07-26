<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ContactInteractions;

class ContactForm extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function interactions()
    {
        return $this->hasMany(ContactInteractions::class);
    }
}
