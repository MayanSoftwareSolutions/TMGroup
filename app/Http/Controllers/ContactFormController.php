<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use App\Models\ContactInteractions;

class ContactFormController extends Controller
{
    public function show(ContactForm $contactForm)
    {
        // abort_if(Gate::denies('can_interact'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $form = ContactForm::find($contactForm)->first();


        return view('contacts.show', compact('form'));
    }

    public function destroy($id)
    {

        $enquiry=ContactForm::find($id);

        $enquiry->delete();

        $success = $enquiry->organisation. "'s enquiry has been deleted successfully !";

        session()->flash('message', $success);

        return redirect()->route('dashboard')->withSuccessMessage('Account deleted');
    }


}
