<?php

namespace Page\Model;

class PageMapper extends \Application\Model\EntityMapper
{
    protected $_table = 'page';

    protected $_modelName = '\Page\Model\PageModel';

    public function findByAlias($alias)
    {
        $result = $this->getTable()->select(array('alias' => $alias));
        if (0 == count($result)) {
            return;
        }
        $row = $result->current();

        /**
         * @var EntityModel
         */
        $model = new $this->_modelName();
        $model->exchangeArray($row->getArrayCopy());

        return $model;
    }
}