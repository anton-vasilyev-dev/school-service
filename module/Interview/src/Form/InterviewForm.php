<?php

namespace Page\Form;

class PageForm extends \Application\Form\EntityForm
{
    public function __construct($name = 'page')
    {
        parent::__construct($name);

        $this->add(array(
            'name' => 'example',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Login',
            ),
        ));
    }
}