<?php

namespace Page\Controller;

use Page\Form;
use Page\Model;

class IndexController extends \Account\Controller\EntityController
{
    protected $_formName = '\Page\Form\PageForm';

    protected $_mapperName = '\Page\Model\PageMapper';

    protected $_tableName = '\Page\Model\PageTable';

    protected $_listHeaders = array(
        'title'       => 'Заголовок',
        'alias'       => 'Адрес',
        'keywords'    => 'Ключевые слова',
        'description' => 'Описание',
    );

    public function showAction()
    {
        \Zend\Debug\Debug::dump($this->params());
        $alias = $this->params()->fromRoute('alias', null);
        if ($alias == null) {
            throw new \Exception('Page not found');
        }

        $page = $this->_getMappper()->findByAlias($alias);
        if ($page == null) {
            throw new \Exception('Page not found');
        }

        return array(
            'page' => $page
        );
    }
}
