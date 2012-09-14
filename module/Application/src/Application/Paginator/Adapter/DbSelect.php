<?php

namespace Application\Paginator\Adapter;

class DbSelect extends Zend\Paginator\Adapter\DbSelect
{
    public function count()
    {
        return 0;
    }
}