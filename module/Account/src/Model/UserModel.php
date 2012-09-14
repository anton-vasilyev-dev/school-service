<?php

namespace Account\Model;

use Application\Model;

class UserModel extends EntityModel
{
    protected $_login;

    protected $_password;

    protected $_email;

    protected $_firstName;

    protected $_lastName;

    protected $_middleName;

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
}