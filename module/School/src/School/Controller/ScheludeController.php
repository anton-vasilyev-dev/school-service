<?php

namespace School\Controller;

use School\Form;
use School\Model;

class ScheludeController extends \Account\Controller\EntityController
{
    protected $_formName = '\School\Form\ScheludeForm';

    protected $_mapperName = '\School\Model\ScheludeMapper';

    protected $_tableName = '\School\Model\ScheludeTable';

    protected $_listHeaders = array(
        'subject'     => 'Предмет',
        'class'       => 'Класс',
        'teacher'     => 'Учитель',
        'description' => 'День недели',
        'leeson'      => 'Урок'
    );
}