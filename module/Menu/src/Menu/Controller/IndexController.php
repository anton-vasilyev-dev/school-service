<?php

namespace Menu\Controller;

use Menu\Form;
use Menu\Model;

class IndexController extends \Account\Controller\EntityController
{
    protected $_formName = '\Menu\Form\MenuForm';

    protected $_mapperName = '\Menu\Model\MenuMapper';

    protected $_tableName = '\Menu\Model\MenuTable';

    protected $_listHeaders = array(
        'title'       => 'Заголовок',
        'alias'       => 'Адрес',
        'keywords'    => 'Ключевые слова',
        'description' => 'Описание',
    );
}
