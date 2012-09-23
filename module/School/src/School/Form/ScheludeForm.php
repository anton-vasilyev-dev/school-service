<?php

namespace School\Form;

class ClassForm extends \Application\Form\EntityForm
{
    public function __construct($name = 'class')
    {
        parent::__construct($name);

        $this->add(array(
            'name' => 'classId',
            'type' => 'text',
            'options' => array(
                'label' => 'Класс',
            ),
        ));

        $this->add(array(
            'name' => 'teacherId',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Учитель',
                'value_options'  => array(
                    0 => 'Понедельник',
                    1 => 'Вторник',
                    2 => 'Среда',
                    3 => 'Четверг',
                    4 => 'Пятница',
                    5 => 'Суббота'
                ),
            ),
        ));

        $this->add(array(
            'name' => 'weekdayId',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Дни недели',
                'value_options'  => array(
                    0 => 'Понедельник',
                    1 => 'Вторник',
                    2 => 'Среда',
                    3 => 'Четверг',
                    4 => 'Пятница',
                    5 => 'Суббота'
                ),
            ),
        ));

        $this->add(array(
            'name' => 'lessonId',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Урок',
                'value_options'  => array(
                    0 => 'Первый (08:00-08:40)',
                    1 => 'Второй (08:50-09:30)',
                    2 => 'Третий (09:40-10:20)',
                    3 => 'Четвертый (10:30-11:10)',
                    4 => 'Пятый (11:20-12:00)',
                    5 => 'Шестой (12:10-13:00)'
                ),
            ),
        ));

        parent::_buttons();
    }
}