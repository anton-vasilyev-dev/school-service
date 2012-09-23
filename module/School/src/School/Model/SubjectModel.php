<?php

namespace School\Model;

use Application\Model\EntityModel as EntityModel;
use Zend\Permissions\Acl\Acl;
use Zend\Permissions\Acl\Role\GenericRole as Role;
use Zend\Permissions\Acl\Resource\GenericResource as Resource;

class SubjectModel extends EntityModel
{
    protected $_title;

    protected $_description;

    protected $_text;

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
                'name'     => 'description',
                'required' => false,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'text',
                'required' => false,
                'filters'  => array(
                ),
                'validators' => array(
                ),
            )));

            $this->_inputFilter = $inputFilter;
        }

        return $this->_inputFilter;
    }

    public function setText($text)
    {
        $this->_text = $text;
    }

    public function getText()
    {
        return $this->_text;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }

    public function getTitle()
    {
        return $this->_title;
    }
}