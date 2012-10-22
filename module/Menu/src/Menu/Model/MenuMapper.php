<?php

namespace Menu\Model;

class MenuMapper extends \Application\Model\EntityMapper
{
    protected $_tableName = 'menuItem';

    protected $_modelName = '\Menu\Model\MenuModel';

    public function parents()
    {
        $resultSet = $this->_table->select('parentId = 0');
        $entries   = array();
        foreach ($resultSet as $row) {
            $entries[$row['id']] = ($row['type'] == 'any' ? 'Для любой страницы' : 'Для главной страницы') . ' - ' . $row['title'];
        }
        return $entries;
    }

    public function menu($type)
    {
        $resultSet = $this->_table->select('type = "' . $type . '" AND parentId = 0');

        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new $this->_modelName();
            $entry->exchangeArray($row->getArrayCopy());
            $entry->setSubItems($this->subMenuItems($entry->getId()));
            $entries[$entry->getSort()] = $entry;
        }

        ksort($entries);
        return $entries;
    }

    public function subMenuItems($parentId)
    {
        $resultSet = $this->_table->select('parentId = ' . (int)$parentId);

        $entries   = array();
        foreach ($resultSet as $row) {
            $entry = new $this->_modelName();
            $entry->exchangeArray($row->getArrayCopy());
            $entries[$entry->getSort()] = $entry;
        }

        ksort($entries);
        return $entries;
    }
}