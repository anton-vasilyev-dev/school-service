<?php

namespace Application\School\Diary;

class TaskForm extends \Application\Form\EntityForm
{
    public function __construct($name = 'task')
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