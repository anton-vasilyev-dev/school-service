<?php

namespace Page\Controller;

use Page\Form;
use Page\Model;

class IndexController extends EntityController
{
    protected $_formName = '\Page\Form\PageForm';

    protected $_mapperName = '\Page\Model\PageMapper';

    protected $_tableName = '\Page\Model\PageTable';

    protected $_listHeaders = array(
        'title'       => 'Title',
        'alias'       => 'Alias',
        'keywords'    => 'Keywords',
        'description' => 'Description',
    );
}
