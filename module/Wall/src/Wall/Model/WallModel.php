<?php

namespace Wall\Model;

use Application\Model\EntityModel as EntityModel;
use Zend\Permissions\Acl\Acl;
use Zend\Permissions\Acl\Role\GenericRole as Role;
use Zend\Permissions\Acl\Resource\GenericResource as Resource;

class WallModel extends EntityModel
{
    protected $_name;

    protected $_message;

    protected $_user;

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
                'name'     => 'message',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'name',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'user',
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

    public function setMessage($message)
    {
        $this->_message = $message;
    }

    public function getMessage()
    {
        return $this->_message;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function setUser($user)
    {
        $this->_user = $user;
    }

    public function getUser()
    {
        return $this->_user;
    }
}