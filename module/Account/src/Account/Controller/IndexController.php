<?php

namespace Account\Controller;

use Account\Form;
use Account\Model;

class IndexController extends EntityController
{
    protected $_formName = '\Account\Form\UserForm';

    protected $_mapperName = '\Account\Model\UserMapper';

    protected $_tableName = '\Account\Model\UserTable';

    protected $_listHeaders = array(
        'login'      => 'Login',
        'email'      => 'E-mail',
        'lastName'   => 'Last name',
        'middleName' => 'Middle name',
        'firstName'  => 'First name',
        'role'       => 'Role'
    );
}
