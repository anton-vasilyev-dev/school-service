<?php

namespace School\Controller;

class MemberController extends \Account\Controller\IndexController
{
    public function __construct()
    {
        parent::__construct();
        unset($this->_listHeaders['role']);
    }
}