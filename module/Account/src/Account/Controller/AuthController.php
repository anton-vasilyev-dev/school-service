<?php

namespace Account\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AuthController extends AbstractActionController
{
    protected $_mapper;

    protected function _getMappper()
    {
        if ($this->_mapper == null) {
            $this->_mapper = new \Account\Model\UserMapper();
            $this->_mapper->setTable($this->getServiceLocator()->get('\Account\Model\UserTable'));
        }

        return $this->_mapper;
    }

    public function loginAction()
    {
        $form = new \Account\Form\AuthForm();

        $request = $this->getRequest();
        if ($request->isPost()) {
            $mapper = $this->_getMappper();
            $mapper->auth($form->get('login')->getValue(), $this->get('password')->getValue());
        }

        return array(
            'form' => $form
        );
    }

    public function logoutAction()
    {

    }
}
