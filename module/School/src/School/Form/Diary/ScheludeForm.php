<?php

namespace Application\School\Diary;

class ScheludeForm extends \Application\Form\EntityForm
{
    public function __construct($name = 'schelude')
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