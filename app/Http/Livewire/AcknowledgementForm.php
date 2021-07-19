<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactForm;

class AcknowledgementForm extends Component
{
    public $ContactForm;
    public $recipient;
    public $message;


    public function render()
    {
        return view('livewire.acknowledgement-form');
    }
}
