<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactForm;
use App\Models\ContactInteractions;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Support\Facades\Notification;
use App\Notifications\InteractionNotification;

class InteractionsForm extends Component
{
    public $currentPage = 1;
    private $contactForm;
    public $contact_form_id;
    public $interaction_type;
    public $subject;
    public $recipient;
    public $context;
    public $message;
    public $success;
    public $logInteraction;

    public $pages = [
        1 => 
        [
            'heading' => 'Recipient',
            'subheading' => 'Please check that the organisation and recipient information is correct before proceeding to respond',
        ],
        2 => 
        [
            'heading' => 'Email',
            'subheading' => 'Please include subject matter in the subject input as this is required. It is also important to choose the appropriate interaction type, as this will logged in the interaction category',
        ],
    ];

    private $validationRules = [

        1 => 
        [
            'contact_form_id' => ['required', 'min:1', 'max:225'],
            'recipient' => ['required', 'min:3', 'max:225', 'email'],
            'interaction_type' => ['required', 'min:3', 'max:225'],
        ],
        2 => 
        [
            'subject' => ['required', 'min:3', 'max:225'],
            'context' => ['required', 'min:3',],
        ],
    ];

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

    public function mount(ContactForm $contactForm)
    {
        $this->contactForm = ContactForm::find($contactForm)->first;
        $this->recipient = $contactForm->email;
        $this->contact_form_id = $contactForm->id;
    }

    public function submit(ContactForm $contactForm)
    {

        $rules = collect($this->validationRules)->collapse()->toArray();

        $this->validate($rules);

            $logInteraction = ContactInteractions::create([
                'contact_form_id' => $this->contact_form_id,
                'interaction_type' => $this->interaction_type,
                'recipient' => $this->recipient,
                'subject' => $this->subject,
                'context' => $this->context,
            ]);


            if($this->interaction_type == "Acknowledgement"){
                ContactForm::where('id', $this->contact_form_id)->update([
                    'acknowledged' => 'Yes',
                ]);
            }elseif($this->interaction_type == "Response"){
                ContactForm::where('id', $this->contact_form_id)->update([
                    'progressed' => 'Yes',
                ]);
            }

            $this->logInteraction = $logInteraction;

            $to =  $this->logInteraction->recipient;

            Notification::route('mail', $to)->notify(new InteractionNotification($logInteraction));

            $users = User::whereHas('roles', function ($query) {
            $query->where('id', 1);
            })->get();


            foreach($users as $user)
            {
                Notification::send($user, new InteractionNotification($this->logInteraction));
            }
            

            $this->success = 'The interaction has been sent to the recipient successfully';

            session()->flash('message', $this->success);

            return redirect('/dashboard');
        
    }

    public function render()
    {
        return view('livewire.interactions-form');
    }
}
