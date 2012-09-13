<?php

namespace Application\Model;

use Zend\Db\Table\AbstractTable;
use Exception;

class EntityMapper
{
    protected $_dbTable;

    protected $_dbModelName;

    public function setDbTable(AbstractTable $dbTable)
    {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof AbstractTable) {
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable = $dbTable;
        return $this;
    }

    public function getDbTable()
    {
        return $this->_dbTable;
    }

    public function save(EntityModel $model)
    {
        $data = $model->getArrayCopy();

        if (null === ($id = $model->getId())) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
    }

    public function find($id)
    {
        $result = $this->getDbTable()->find($id);
        if (0 == count($result)) {
            return;
        }
        $row = $result->current();
        $model = new $this->_dbModelName();
        $model->exchangeArray($row->toArray());
    }

    public function fetchAll($where)
    {
        $resultSet = $this->getDbTable()->select($where);
        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new $this->_dbModelName();
            $entry->exchangeArray($row->toArray());
            $entries[] = $entry;
        }
        return $entries;
    }

    public function delete($id)
    {

    }
}