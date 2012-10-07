<?php

namespace Menu\Form;

class MenuForm extends \Application\Form\EntityForm
{
    public function __construct($name = 'menu')
    {
        parent::__construct($name);

        $this->add(array(
            'name' => 'title',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Заголовок',
            ),
        ));

        $this->add(array(
            'name' => 'alias',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Адрес',
            ),
        ));

        $this->add(array(
            'name' => 'description',
            'attributes' => array(
                'type'  => 'keywords',
            ),
            'options' => array(
                'label' => 'Ключевые слова',
            ),
        ));

        $this->add(array(
            'name' => 'description',
            'attributes' => array(
                'type'  => 'textarea',
            ),
            'options' => array(
                'label' => 'Описание',
            ),
        ));

        $this->add(array(
            'name' => 'text',
            'attributes' => array(
                'type'  => 'textarea'
            ),
            'options' => array(
                'label' => 'Текст',
            ),
        ));


        parent::_buttons();
    }
}