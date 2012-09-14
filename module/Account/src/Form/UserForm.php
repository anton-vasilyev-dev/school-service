<?php

class UserForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('user');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'login',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Login',
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

        $this->add(array(
            'name' => 'passwordRepeat',
            'attributes' => array(
                'type'  => 'password',
            ),
            'options' => array(
                'label' => 'Repeat password',
            ),
        ));

        $this->add(array(
            'name' => 'firstName',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'First name',
            ),
        ));

        $this->add(array(
            'name' => 'middleName',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Middle name',
            ),
        ));

        $this->add(array(
            'name' => 'middleName',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Midle name',
            ),
        ));

        /// ?????
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));
    }
}