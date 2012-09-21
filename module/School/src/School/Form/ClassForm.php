<?php

namespace Application\School;

class SubjectForm extends \Application\Form\EntityForm
{
    public function __construct($name = 'class')
    {
        parent::__construct($name);

        $this->add(array(
            'name' => 'example',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Example',
            ),
        ));
    }
}