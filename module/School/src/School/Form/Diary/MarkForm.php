<?php

namespace Application\School\Diary;

class MarkForm extends \Application\Form\EntityForm
{
    public function __construct($name = 'mark')
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