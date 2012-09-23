<?php

namespace Application\Form;

use Exception;

class EntityForm extends \Zend\Form\Form
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->setAttribute('method', 'post');
        $this->setAttribute('class', 'entity-form');

        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type'  => 'hidden',
            ),
        ));
    }

    protected function _buttons()
    {
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Отправить',
                'id' => 'submit-button',
            ),
        ));

        $this->add(array(
            'name' => 'cancel',
            'attributes' => array(
                'type'  => 'button',
                'value' => 'Отмена',
                'id' => 'cancel-button',
            ),
        ));
    }
}