<?php

namespace Account\Form;

class RegistrationForm extends UserForm
{
    public function __construct($name = 'registration')
    {
        parent::__construct($name);
        $this->remove('cancel');
        $this->setAttribute('class', 'entity-form registration-form');
        $this->get('role')->setValueOptions(array(
            'student' => 'Ученик',
            'parent'  => 'Родитель',
            'teacher' => 'Учитель'
        ));
        $this->get('role')->setLabel('Кто вы');

        parent::_buttons();
    }
}