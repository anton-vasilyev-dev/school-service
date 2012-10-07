<?php

namespace Wall\Controller;

use Wall\Form;
use Wall\Model;

class IndexController extends \Account\Controller\EntityController
{
    protected $_formName = '\Wall\Form\WallForm';

    protected $_mapperName = '\Wall\Model\WallMapper';

    protected $_tableName = '\Wall\Model\WallTable';

    protected $_listHeaders = array(
        'message'     => 'Сообщение',
        'dateTime'    => 'Дата и время',
        'image'       => 'Картинка',
    );

    public function showAction()
    {
        return parent::indexAction();
    }
}
