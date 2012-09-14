<?php

namespace Account\Controller;

use Exception;
use Application\Controller;
use Account\Form;
use Account\Model;

class EntityController extends \Application\Controller\EntityController
{
    protected $_user;

    protected $_resourceName;

    public function __construct()
    {
        parent::__construct();
        $this->_user = null; // Получаем модель юзера из Zend\Authentithication Storage.
    }

    public function addAction()
    {
        if (!$this->_user->isAllowed($this->_resourceName, 'add')) {
            throw new Exception('Permission denied.');
        }
        parent::addAction();
    }

    public function editAction()
    {
        if (!$this->_user->isAllowed($this->_resourceName, 'edit')) {
            throw new Exception('Permission denied.');
        }
        parent::editAction();
    }

    public function deleteAction()
    {
        if (!$this->_user->isAllowed($this->_resourceName, 'delete')) {
            throw new Exception('Permission denied.');
        }
        parent::deleteAction();
    }

    public function indexAction()
    {
        if (!$this->_user->isAllowed($this->_resourceName, 'index')) {
            throw new Exception('Permission denied.');
        }
        parent::indexAction();
    }
}
