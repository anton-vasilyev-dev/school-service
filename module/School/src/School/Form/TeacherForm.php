<?php

namespace Application\School;

class TeacherForm extends MemberForm
{
    public function __construct($name = 'teacher')
    {
        parent::__construct($name);
        $this->get('role')->value($name);
    }
}