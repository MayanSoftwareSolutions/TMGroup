<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ContactForm;

class ContactInteractions extends Model
{
    use HasFactory;

    protected $guarded = [];

    
    public function contactForms()
    {
        return $this->belongsTo(ContactForm::class);
    }
}
