<?php

namespace Menu\Form;

class MenuForm extends \Application\Form\EntityForm
{
    public function __construct($name = 'menu')
    {
        parent::__construct($name);

        $this->add(array(
            'name' => 'type',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Расположение',
                'value_options' => array(
                    'any'   => 'Для любой страницы',
                    'home'  => 'Для главной страницы',
                )
            ),
        ));

        $this->add(array(
            'name' => 'parentId',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Основной пункт меню',
                'value_options' => array('0' => 'Отсуствует'),
            ),
        ));

        $this->add(array(
            'name' => 'title',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Название',
            ),
        ));

        $this->add(array(
            'name' => 'href',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Адрес',
            ),
        ));

        $this->add(array(
            'name' => 'sort',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Сортировка',
            ),
        ));

        parent::_buttons();
    }
}