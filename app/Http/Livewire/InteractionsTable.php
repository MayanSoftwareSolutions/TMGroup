<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ContactForm;
use App\Models\ContactInteractions;

class InteractionsTable extends Component
{

    use withPagination;

    public $contactForm;

    public function mount($contactForm)
    {
        $this->contactForm = $contactForm;

    }
    public function render()
    {
        return view('livewire.interactions-table', 
        ['interactions' => ContactInteractions::where ('contact_form_id', $this->contactForm)->paginate(4)]);
    }
}
