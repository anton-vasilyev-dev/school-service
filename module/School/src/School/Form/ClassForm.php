<?php

namespace School\Form;

class ClassForm extends \Application\Form\EntityForm
{
    public function __construct($name = 'class')
    {
        parent::__construct($name);

        $this->add(array(
            'name' => 'number',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Номер',
            ),
        ));

        $this->add(array(
            'name' => 'description',
            'attributes' => array(
                'type'  => 'textarea',
            ),
            'options' => array(
                'label' => 'Заметки',
            ),
        ));

        parent::_buttons();
    }
}