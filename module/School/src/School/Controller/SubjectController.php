<?php

namespace School\Controller;

use School\Form;
use School\Model;

class SubjectController extends \Account\Controller\EntityController
{
    protected $_formName = '\School\Form\SubjectForm';

    protected $_mapperName = '\School\Model\SubjectMapper';

    protected $_tableName = '\School\Model\SubjectTable';

    protected $_listHeaders = array(
        'number'       => 'Название',
        'description'  => 'Описание'
    );
}