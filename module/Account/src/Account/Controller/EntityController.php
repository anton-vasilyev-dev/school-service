<?php

namespace Account\Controller;

use Exception;
use Application\Controller;
use Account\Model\UserMapper as UserMapper;
use Account\Form\UserForm as UserForm;
use Account\Model\UserModel as UserModel;

class EntityController extends \Application\Controller\EntityController
{
    protected $_user;

    protected $_resourceName;

    public function __construct()
    {
        $this->_user = new UserModel(); // Получаем модель юзера из Zend\Authentithication Storage.
        $this->_user->setRole('guest');

        $this->_resourceName = 'account\index';
    }

    protected function _menu()
    {
        $GLOBALS['menu'] = $this->getServiceLocator()->get('\Menu\Model\MenuMapper')->menu('any');
    }

    public function addAction()
    {
        if (!$this->_user->isAllowed($this->_resourceName, 'add')) {
            throw new Exception('Permission denied.');
        }
        return parent::addAction();
    }

    public function editAction()
    {
        if (!$this->_user->isAllowed($this->_resourceName, 'edit')) {
            throw new Exception('Permission denied.');
        }
        return parent::editAction();
    }

    public function deleteAction()
    {
        if (!$this->_user->isAllowed($this->_resourceName, 'delete')) {
            throw new Exception('Permission denied.');
        }
        return parent::deleteAction();
    }

    public function indexAction()
    {
        if (!$this->_user->isAllowed($this->_resourceName, 'index')) {
            throw new Exception('Permission denied.');
        }
        return parent::indexAction();
    }
}
