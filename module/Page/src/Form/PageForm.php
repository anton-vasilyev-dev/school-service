<?php

namespace Interview\Form;

class InterviewForm extends \Application\Form\EntityForm
{
    public function __construct($name = 'interview')
    {
        parent::__construct($name);

        $this->add(array(
            'name' => 'example',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Login',
            ),
        ));
    }
}