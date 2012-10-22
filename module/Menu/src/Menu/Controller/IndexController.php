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
        'title'  => 'Название',
        'href'   => 'Адрес',
        'type'   => 'Тип',
        'parent' => 'Основной пукнт меню',
    );

    protected function _getForm()
    {
        $form = parent::_getForm();
        $parents = $this->_getMappper()->parents();
        $options = $form->get('parentId')->getValueOptions();
        foreach ($parents as $id => $parent) {
            $options[$id] = $parent;
        }
        $form->get('parentId')->setValueOptions($options);

        return $form;
    }

    public function indexAction()
    {
        //\Zend\Debug\Debug::dump($this->_getMappper()->menu('any'));

        $select = $this->_getMappper()->getTable()->getSql()->select();
            $select->columns(array('*', 'type' => new \Zend\Db\Sql\Expression('IF(menuItem.type = "any", "Для любой страницы", "Для главной страницы")')));
        $select->join(array('mi' => 'menuItem'), 'mi.id = menuItem.parentId', array('parent' => new \Zend\Db\Sql\Expression('IF(mi.title IS NOT NULL, mi.title, "Отсутствует")')), \Zend\Db\Sql\Select::JOIN_LEFT);
        $adapter = new \Zend\Paginator\Adapter\DbSelect(
            $select,
            $this->_getMappper()->getTable()->getAdapter()
        );
        $paginator = new \Zend\Paginator\Paginator($adapter);
        $paginator->setCurrentPageNumber($this->params()->fromRoute('page'));

        return array(
            'paginator' => $paginator,
            'headers'   => $this->_getListHeaders(),
        );
    }
}
