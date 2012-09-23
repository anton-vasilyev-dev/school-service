<?php

namespace School\Form;

class SubjectForm extends \Application\Form\EntityForm
{
    public function __construct($name = 'subject')
    {
        parent::__construct($name);

        $this->add(array(
            'name' => 'title',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Название',
            ),
        ));

        $this->add(array(
            'name' => 'description',
            'attributes' => array(
                'type'  => 'textarea',
            ),
            'options' => array(
                'label' => 'Описание',
            ),
        ));

        $this->add(array(
            'name' => 'text',
            'attributes' => array(
                'type'  => 'textarea',
            ),
            'options' => array(
                'label' => 'Текст',
            ),
        ));

        parent::_buttons();
    }
}