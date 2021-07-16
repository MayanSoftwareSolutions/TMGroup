<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactForm;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ContactMailNotification;

class Contact extends Component
{
    public $organisation;
    public $name;
    public $tel;
    public $email;
    public $query;
    public $success;
  
    public function submit()
    {
        $validatedData = $this->validate([
            'organisation' => 'required|min:5',
            'name' => 'required|min:5',
            'email' => 'required|email',
            'tel' => 'required|max:15',
            'query' => 'required',
        ]);
  
        $create = ContactForm::create($validatedData);

        $users = User::whereHas('roles', function ($query) {
            $query->where('id', 1);
        })->get();
 

        foreach($users as $user)
        {
            Notification::send($user, new ContactMailNotification($create));
        }

        $this->success = "Thank you for getting in touch, we will contact you soon";

        $this->clearFields();

        session()->flash('message', $this->success);

    }

    private function clearFields()
    {
        $this->organisation = '';
        $this->email = '';
        $this->name = '';
        $this->tel = '';
        $this->query = '';
    }

    public function render()
    {
        return view('livewire.contact');
    }
}