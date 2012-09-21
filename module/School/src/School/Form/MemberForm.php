<?php

namespace Application\School;

class MemberForm extends \Account\Form\UserForm
{
    public function __construct($name = null)
    {
        parent::__construct($name);
        $this->remove('role');

        $this->add(array(
            'name' => 'role',
            'attributes' => array(
                'type'  => 'hidden',
            ),
            'options' => array(
                'label' => 'Role',
            ),
        ));
    }
}