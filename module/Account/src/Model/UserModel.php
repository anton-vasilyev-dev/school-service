<?php

namespace Account\Model;

use Application\Model;
use Zend\Permissions\Acl\Acl;
use Zend\Permissions\Acl\Role\GenericRole as Role;
use Zend\Permissions\Acl\Resource\GenericResource as Resource;

class UserModel extends EntityModel
{
    protected $_login;

    protected $_password;

    protected $_email;

    protected $_firstName;

    protected $_lastName;

    protected $_middleName;

    protected $_role;

    protected $_acl;

    public function __construct()
    {
        $this->_acl = new Acl();

        $acl->addRole(new Role('guest'))
            ->addRole(new Role('student'), 'guest')
            ->addRole(new Role('parent'), 'student')
            ->addRole(new Role('teacher'), 'guest')
            ->addRole(new Role('admin'), 'teacher');

        $acl->addResource(new Resource('account\user'))
            ->addResource(new Resource('account\auth'))
            ->addResource(new Resource('interview'))
            ->addResource(new Resource('wall'))
            ->addResource(new Resource('static-page'))
            ->addResource(new Resource('school\class'))
            ->addResource(new Resource('school\diary'))
            ->addResource(new Resource('school\parent'))
            ->addResource(new Resource('school\student'))
            ->addResource(new Resource('school\subject'))
            ->addResource(new Resource('school\teacher'));

        $acl->allow('guest', 'account\auth', 'login');
        $acl->deny('guest', 'account\auth', 'logout');
        // ...
    }

    public function setEmail($email)
    {
        $this->_email = $email;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function setFirstName($firstName)
    {
        $this->_firstName = $firstName;
        return $this;
    }

    public function getFirstName()
    {
        return $this->_firstName;
    }

    public function setLastName($lastName)
    {
        $this->_lastName = $lastName;
        return $this;
    }

    public function getLastName()
    {
        return $this->_lastName;
    }

    public function setLogin($login)
    {
        $this->_login = $login;
        return $this;
    }

    public function getLogin()
    {
        return $this->_login;
    }

    public function setMiddleName($middleName)
    {
        $this->_middleName = $middleName;
        return $this;
    }

    public function getMiddleName()
    {
        return $this->_middleName;
    }

    public function setPassword($password)
    {
        $this->_password = $password;
        return $this;
    }

    public function getPassword()
    {
        return $this->_password;
    }

    public function setRole($role)
    {
        $this->_role = $role;
        return $this;
    }

    public function getRole()
    {
        return $this->_role;
    }

    public function isAllowed($resource, $permission)
    {
        return $this->_acl->isAllowed($this->getRole(), $resource, $permission);
    }
}