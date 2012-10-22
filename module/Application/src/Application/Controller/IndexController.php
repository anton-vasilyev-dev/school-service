<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function onDispatch(\Zend\Mvc\MvcEvent $e)
    {
        $this->_menu();
        parent::onDispatch($e);
    }

    protected function _menu()
    {
        $GLOBALS['menu'] = $this->getServiceLocator()->get('\Menu\Model\MenuMapper')->menu('any');
    }

    public function indexAction()
    {
        $mapper = new \Page\Model\PageMapper();
        $mapper->setTable($this->getServiceLocator()->get('\Page\Model\PageTable'));

        $page = $mapper->findByAlias('home');

        $menu = $this->getServiceLocator()->get('\Menu\Model\MenuMapper')->menu('home');

        return array(
            'page' => $page,
            'menu' => $menu
        );
    }

    public function contentAction()
    {
        return array();
    }
}
