<?php

namespace Account\Model;

class UserMapper extends \Application\Model\EntityMapper
{
    protected $_table = 'user';

    protected $_modelName = '\Account\Model\UserModel';
}