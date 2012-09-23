<?php

namespace Account\Form;

class AuthForm extends \Zend\Form\Form
{
    public function __construct($name = null)
    {
        parent::__construct('auth');
        $this->setAttribute('class', 'entity-form');

        $this->add(array(
            'name' => 'login',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Логин'
            ),
        ));

        $this->add(array(
            'name' => 'password',
            'attributes' => array(
                'type'  => 'password',
            ),
            'options' => array(
                'label' => 'Пароль',
            ),
        ));

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Отправить',
                'id' => 'submit-button',
            ),
        ));
    }
}