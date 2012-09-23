<?php

namespace Account\Controller;

use Account\Form;
use Account\Model;

class IndexController extends EntityController
{
    protected $_formName = '\Account\Form\UserForm';

    protected $_mapperName = '\Account\Model\UserMapper';

    protected $_tableName = '\Account\Model\UserTable';

    protected $_listHeaders = array(
        'login'      => 'Логин',
        'email'      => 'Электронная почта',
        'lastName'   => 'Имя',
        'middleName' => 'Отчество',
        'firstName'  => 'Фамилия',
        'role'       => 'Роль'
    );

    public function registrationAction()
    {
        $form = new \Account\Form\RegistrationForm();
        $form->get('submit')->setValue('Зарегистрироваться');
        $form->setAttribute('action', $this->getRequest()->getRequestUri());

        $request = $this->getRequest();
        if ($request->isPost()) {
            $model = $this->_getMappper()->create();
            $form->setInputFilter($model->getInputFilter());
            $form->setData($request->getPost()->toArray());
            if ($form->isValid()) {
                $model->exchangeArray($form->getData());
                $id = $this->_getMappper()->save($model);

                return $this->redirect()->toRoute('page_registration_result');
            }
        }

        return array(
            'form' => $form
        );
    }
}
