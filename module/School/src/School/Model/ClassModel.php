<?php

namespace School\Model;

use Application\Model\EntityModel as EntityModel;
use Zend\Permissions\Acl\Acl;
use Zend\Permissions\Acl\Role\GenericRole as Role;
use Zend\Permissions\Acl\Resource\GenericResource as Resource;

class ClassModel extends EntityModel
{
    protected $_number;

    protected $_description;

    public function setNumber($number)
    {
        $this->_number = $number;
        return $this;
    }

    public function getNumber()
    {
        return $this->_number;
    }

    public function setDescription($description)
    {
        $this->_description = $description;
        return $this;
    }

    public function getDescription()
    {
        return $this->_description;
    }

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
                'name'     => 'number',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'description',
                'required' => false,
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
}