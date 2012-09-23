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
                'label' => 'Логин',
            ),
        ));

        $this->add(array(
            'name' => 'email',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Электронная почта',
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
            'name' => 'passwordRepeat',
            'attributes' => array(
                'type'  => 'password',
            ),
            'options' => array(
                'label' => 'Подтверждение пароля',
            ),
        ));

        $this->add(array(
            'name' => 'lastName',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Фамилия',
            ),
        ));

        $this->add(array(
            'name' => 'firstName',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Имя',
            ),
        ));

        $this->add(array(
            'name' => 'middleName',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Отчество',
            ),
        ));

        $this->add(array(
            'name' => 'role',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Роль',
                'value_options' => array(
                    'student' => 'Ученик',
                    'parent'  => 'Родитель',
                    'teacher' => 'Учитель',
                    'admin'   => 'Администратор'
                )
            ),
        ));

        parent::_buttons();
    }
}