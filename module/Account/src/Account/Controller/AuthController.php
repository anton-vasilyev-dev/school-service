<?php

namespace Account\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AuthController extends AbstractActionController
{
    public function loginAction()
    {
        $form = $this->_getForm();

        $request = $this->getRequest();
        if ($request->isPost()) {

        }

        return array(
            'form' => $form
        );
    }

    public function logoutAction()
    {

    }
}
