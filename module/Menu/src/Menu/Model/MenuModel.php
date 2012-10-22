<?php

namespace Menu\Model;

use Application\Model\EntityModel as EntityModel;
use Zend\Permissions\Acl\Acl;
use Zend\Permissions\Acl\Role\GenericRole as Role;
use Zend\Permissions\Acl\Resource\GenericResource as Resource;

class MenuModel extends EntityModel
{
    protected $_id;

    protected $_title;

    protected $_href;

    protected $_parentId;

    protected $_type;

    protected $_level;

    protected $_sort;

    protected $_collectionSubItems;

    public function getInputFilter()
    {
        if (!$this->_inputFilter) {
            $inputFilter = new \Zend\InputFilter\InputFilter();
            $factory     = new \Zend\InputFilter\Factory();

            $inputFilter->add($factory->createInput(array(
                'name'     => 'id',
                'required' => false,
                'filters'  => array(
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'title',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'href',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'sort',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                ),
            )));

            $this->_inputFilter = $inputFilter;
        }

        return $this->_inputFilter;
    }

    public function setHref($href)
    {
        $this->_href = $href;
    }

    public function getHref()
    {
        return $this->_href;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setParentId($parentId)
    {
        if ($parentId > 0) {
            $this->setLevel(2);
        } else {
            $this->setLevel(1);
        }
        $this->_parentId = $parentId;
    }

    public function getParentId()
    {
        return $this->_parentId;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }

    public function getTitle()
    {
        return $this->_title;
    }

    public function setType($type)
    {
        $this->_type = $type;
    }

    public function getType()
    {
        return $this->_type;
    }

    public function setLevel($level)
    {
        $this->_level = $level;
        return $this;
    }

    public function getLevel()
    {
        return $this->_level;
    }

    public function getSubItems()
    {
        return $this->_collectionSubItems;
    }

    public function setSubItems($collectionSubItems)
    {
        $this->_collectionSubItems = $collectionSubItems;
        return $this;
    }

    public function setSort($sort)
    {
        $this->_sort = $sort;
        return $this;
    }

    public function getSort()
    {
        return $this->_sort;
    }
}