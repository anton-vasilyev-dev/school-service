<?php

namespace Page\Model;

use Application\Model\EntityModel as EntityModel;
use Zend\Permissions\Acl\Acl;
use Zend\Permissions\Acl\Role\GenericRole as Role;
use Zend\Permissions\Acl\Resource\GenericResource as Resource;

class PageModel extends EntityModel
{
    protected $_title;

    protected $_alias;

    protected $_description;

    protected $_keywords;

    protected $_text;

    public function setAlias($alias)
    {
        $this->_alias = $alias;
        return $this;
    }

    public function getAlias()
    {
        return $this->_alias;
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

    public function setKeywords($keywords)
    {
        $this->_keywords = $keywords;
        return $this;
    }

    public function getKeywords()
    {
        return $this->_keywords;
    }

    public function setText($text)
    {
        $this->_text = $text;
        return $this;
    }

    public function getText()
    {
        return $this->_text;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
        return $this;
    }

    public function getTitle()
    {
        return $this->_title;
    }
}