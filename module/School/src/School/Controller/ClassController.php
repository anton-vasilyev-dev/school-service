<?php

namespace School\Controller;

use School\Form;
use School\Model;

class ClassController extends \Account\Controller\EntityController
{
    protected $_formName = '\School\Form\ClassForm';

    protected $_mapperName = '\School\Model\ClassMapper';

    protected $_tableName = '\School\Model\ClassTable';

    protected $_listHeaders = array(
        'number'       => 'Номер',
        'description'  => 'Заметки'
    );
}