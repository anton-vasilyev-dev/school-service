<?php

namespace Application\School;

class StudentForm extends MemberForm
{
    public function __construct($name = 'student')
    {
        parent::__construct($name);
        $this->get('role')->value($name);
    }
}