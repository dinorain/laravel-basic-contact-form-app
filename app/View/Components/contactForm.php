<?php

namespace App\View\Components;

use Illuminate\View\Component;

class contactForm extends Component
{
    public $contact;
    public $mode;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($contact=null, $mode='create')
    {
        $this->contact = $contact;
        $this->mode = $mode;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $readOnly = false;
        $formAction = route('contact-message.store');
        $buttonMessage = "Send message";
        if ($this->mode == 'edit') {
            $buttonMessage = "Save";
            $formAction = route('contact-message.update', ['id' => $this->contact->id]);
        }
        else if ($this->mode == 'view') {
            $readOnly = true;
        }

        return view('components.contact-form', compact([
            'buttonMessage',
            'readOnly',
            'formAction'
        ]));
    }
}
