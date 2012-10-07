<?php

namespace Wall\Form;

class WallForm extends \Application\Form\EntityForm
{
    public function __construct($name = 'wall')
    {
        parent::__construct($name);

        $this->add(array(
            'name' => 'name',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Имя',
            ),
        ));

        $this->add(array(
            'name' => 'message',
            'attributes' => array(
                'type'  => 'textarea',
            ),
            'options' => array(
                'label' => 'Сообщение',
            ),
        ));

        $this->add(array(
            'name' => 'image',
            'attributes' => array(
                'type'  => 'file'
            ),
            'options' => array(
                'label' => 'Картинка',
            ),
        ));


        parent::_buttons();
    }
}