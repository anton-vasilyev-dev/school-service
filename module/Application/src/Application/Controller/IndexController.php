<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $mapper = new \Page\Model\PageMapper();
        $mapper->setTable($this->getServiceLocator()->get('\Page\Model\PageTable'));

        $page = $mapper->findByAlias('home');

        return array(
            'page' => $page
        );
    }
}
