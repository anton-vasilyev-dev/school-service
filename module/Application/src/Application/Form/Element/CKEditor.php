<?php

namespace Application\Form\Element;

class CKEditor extends \Zend\Form\Element\Textarea implements \Zend\Form\ElementInterface
{
    protected $attributes = array(
        'type' => 'textarea',
    );
}
