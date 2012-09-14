<?php

namespace Account\Controller;

use Account\Form;
use Account\Model;

class IndexController extends EntityController
{
    protected $_formName = 'UserForm';

    protected $_mapperName = 'UserMapper';

    protected $_listHeaders = array(
        'login'      => 'Login',
        'email'      => 'E-mail',
        'lastName'   => 'Last name',
        'middleName' => 'Middle name',
        'firstName'  => 'First name',
        'role'       => 'Role'
    );
}
