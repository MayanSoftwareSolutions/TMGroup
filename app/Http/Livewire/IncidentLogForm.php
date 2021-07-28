<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\IncidentLog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class IncidentLogForm extends Component
{
    public $user;
    public $log_reference;
    public $organisation;
    public $incident_detail;
    public $date_picked_up;
    public $date_closed;
    public $currentPage =1;
    public $success;

        public $pages = [
        1 => 
        [
            'heading' => 'Officer and Organisation',
            'subheading' => 'Please ensure that the ajacent information is relevant to your organisation, including your details. These cannot be changed.',
        ],
        2 => 
        [
            'heading' => 'Incident Log',
            'subheading' => 'Please describe the issue or request you are logging in as much information as possible. This is what will be sent to the developers to resolve.',
        ],
    ];

        private $validationRules = [
        1 => 
        [
            'log_reference' => ['required', 'min:3', 'max:100',],
        ],
        2 => 
        [
            'incident_detail' => ['required', 'min:3', 'max:2000', 'regex:/^[\pL\s\-]+$/u'],
            
        ],
    ];

        public function mount()
        {
            $this->user = Auth::user();
            $this->log_reference = uniqid();
        }

        public function updated($propertyName)
        {
            $this->validateOnly($propertyName, $this->validationRules[$this->currentPage]);
        }

        public function goToNextPage()
        {
            $this->validate($this->validationRules[$this->currentPage]);
            $this->currentPage++;
        }

        public function goToPreviousPage()
        {
            $this->currentPage--;
        }

        public function resetSuccess()
        {
            $this->reset('success');
        }

        public function submit()
        {

        $rules = collect($this->validationRules)->collapse()->toArray();

        $this->validate($rules);

        $create = IncidentLog::create([
                'user_id' => $this->user->id,
                'log_reference' => $this->log_reference,
                'organisation' => $this->user->organisation,
                'incident_detail' => $this->incident_detail,
                ]);
                

        $this->success = 'Your incident log has been logged successfully !';

        session()->flash('message', $this->success);

        return redirect('/dashboard');
        
        }

        public function render()
        {
            return view('livewire.incident-log-form');
        }
}
