<?php

namespace Account\Form;

class UserForm extends \Application\Form\EntityForm
{
    public function __construct($name = 'user')
    {
        parent::__construct($name);

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

        $this->add(array(
            'name' => 'role',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Role',
                'value_options' => array(
                    'guest'   => 'Гость',
                    'student' => 'Ученик',
                    'parent'  => 'Родитель',
                    'teacher' => 'Учитель',
                    'admin'   => 'Администратор'
                )
            ),
        ));
    }
}