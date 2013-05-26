<?php

namespace Wall\Controller;

use Wall\Form;
use Wall\Model;

class IndexController extends \Account\Controller\EntityController
{
    protected $_formName = '\Wall\Form\WallForm';

    protected $_mapperName = '\Wall\Model\WallMapper';

    protected $_tableName = '\Wall\Model\WallTable';

    protected $_listHeaders = array(
        'name'        => 'Заголовок',
        'user'       => 'Автор',
        'message'     => 'Сообщение',
        'dateTime'    => 'Дата и время',
    );

    public function showAction()
    {
        $result  = parent::addAction(true);

        $request = $this->getRequest();
        $message = '';
        $messageGood = '';
        if (!array_key_exists('id', $result) && $request->isPost()) {
            $message = 'Необходимо заполнить все поля формы!';
        }
        if (array_key_exists('id', $result) && $request->isPost() && $result['id'] > 0) {
            $form = $result['form'];
            $messageGood = 'Ваше сообщение успешно добавлено!';
            $form->setData(array('name' => '', 'message' => '', 'user' => ''));
        }

        return array_merge($result, parent::indexAction(), array('message' => $message, 'messageGood' => $messageGood));
    }
}
