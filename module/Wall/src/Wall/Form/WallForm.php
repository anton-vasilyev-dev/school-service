<?php

namespace Wall\Form;

class WallForm extends \Application\Form\EntityForm
{
    public function __construct($name = 'wall')
    {
        parent::__construct($name);

        $this->add(array(
            'name' => 'user',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Ваше имя',
            ),
        ));

        $this->add(array(
            'name' => 'name',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Заголовок сообщения',
            ),
        ));

        $this->add(array(
            'name' => 'message',
            'attributes' => array(
                'type'  => 'textarea',
            ),
            'options' => array(
                'label' => 'Текст сообщения',
            ),
        ));


        parent::_buttons();
    }
}