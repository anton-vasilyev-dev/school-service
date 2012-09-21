<?php

namespace Application\Form;

use Zend\Form;
use Exception;

class EntityForm extends Form
{
    public function __construct($name)
    {
        parent::construct($name);
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'id' => 'submit-button',
            ),
        ));

        $this->add(array(
            'name' => 'cancel',
            'attributes' => array(
                'type'  => 'button',
                'value' => 'Cancel',
                'id' => 'cancel-button',
            ),
        ));
    }
}