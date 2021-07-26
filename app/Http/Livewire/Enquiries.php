<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactForm;

class Enquiries extends Component
{

    public $newEquiries;
    public $acknowledgement;
    public $openEnquiries;
    public $appointments;
    public $allEnquiries;

    public function mount()
    {
        $enquiries = ContactForm::where('created_at', '>' ,now()->subDays(7))->count();
        $acknowledgement = ContactForm::where('acknowledged', '=', 'No')->count();
        $openEnquiries = ContactForm::where('status', '=', 'open')->count();
        $appointments = ContactForm::where('appointment_date', '>', now())->count();
        $allEnquiries = ContactForm::get();


        $this->newEquiries = $enquiries;
        $this->acknowledgement = $acknowledgement;
        $this->openEnquiries = $openEnquiries;
        $this->appointments = $appointments;
        $this->allEnquiries =  $allEnquiries;

    }

    public function render()
    {
        return view('livewire.enquiries');
    }
}
