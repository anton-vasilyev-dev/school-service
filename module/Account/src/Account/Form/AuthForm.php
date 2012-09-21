<?php

class AuthForm extends \Application\Form\EntityForm
{
    public function __construct($name = null)
    {
        parent::__construct('auth');

        $this->add(array(
            'name' => 'login',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Login'
            ),
        ));

        $this->add(array(
            'name' => 'password',
            'attributes' => array(
                'type'  => 'password',
            ),
            'options' => array(
                'label' => 'Password',
            ),
        ));
    }
}