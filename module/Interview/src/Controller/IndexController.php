<?php

namespace Interview\Controller;

use Interview\Form;
use Interview\Model;

class IndexController extends EntityController
{
    protected $_formName = '\Interview\Form\PageForm';

    protected $_mapperName = '\Interview\Model\PageMapper';

    protected $_tableName = '\Interview\Model\PageTable';

    protected $_listHeaders = array(

    );
}
