<?php

namespace Application\Controller;

use Exception;
use Zend\Paginator;
use Zend\Paginator\Adapter;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model;
use Application\Form;
use Application\Paginator\Adapter\DbSelect as DbSelect;

class EntityController extends AbstractActionController
{
    protected $_formName;

    protected $_mapperName;

    protected $_tableName;

    protected $_listHeaders;

    /**
     * @var \Application\Model\EntityMapper
     */
    protected $_mapper;

    /**
     * @var \Application\Form\EntityForm
     */
    protected $_form;

    /**
     * @return \Application\Model\EntityMapper
     */
    protected function _getMappper()
    {
        if ($this->_mapper == null) {
            $this->_mapper = new $this->_mapperName();
            $this->_mapper->setTable($this->getServiceLocator()->get($this->_tableName));
        }

        return $this->_mapper;
    }

    /**
     * @return \Application\Form\EntityForm
     */
    protected function _getForm()
    {
        if ($this->_form == null) {
            $this->_form = new $this->_formName();
        }

        return $this->_form;
    }

    protected function _getListHeaders()
    {
        return $this->_listHeaders;
    }

    public function addAction()
    {
        $form = $this->_getForm();
        $form->get('submit')->setValue('Добавить');
        $form->setAttribute('action', $this->getRequest()->getRequestUri());

        $request = $this->getRequest();
        if ($request->isPost()) {
            $model = $this->_getMappper()->create();
            $form->setInputFilter($model->getInputFilter());
            $form->setData($request->getPost()->toArray());
            if ($form->isValid()) {
                $model->exchangeArray($form->getData());
                $id = $this->_getMappper()->save($model);

                return $this->redirect()->toUrl(str_replace('/add/', '/edit/id/' . $id . '/', $this->getRequest()->getRequestUri()));
            }
        }

        return array(
            'form' => $form
        );
    }

    public function editAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            throw new Exception('Entity with this identifier doesn\'t exitst');
        }
        $model = $this->_getMappper()->find($id);

        $form  = $this->_getForm();
        $form->setAttribute('action', $this->getRequest()->getRequestUri());
        $form->bind($model);
        $form->get('submit')->setValue('Редактировать');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setInputFilter($model->getInputFilter());
            $form->setData($request->getPost()->toArray());

            if ($form->isValid()) {
                $this->_getMappper()->save($model);
            }
        }

        return array(
            'form' => $form
        );
    }

    public function deleteAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            throw new Exception('Entity with this identifier doesn\'t exitst');
        }

        $this->_getMappper()->delete($id);

        return $this->redirect()->toUrl(str_replace('/delete/id/' . $id . '/', '/index/', $this->getRequest()->getRequestUri()));
    }

    public function indexAction()
    {
        $adapter = new \Zend\Paginator\Adapter\DbSelect(
            $this->_getMappper()->getTable()->getSql()->select(),
            $this->_getMappper()->getTable()->getAdapter()
        );
        $paginator = new \Zend\Paginator\Paginator($adapter);
        $paginator->setCurrentPageNumber($this->params()->fromRoute('page'));

        return array(
            'paginator' => $paginator,
            'headers'   => $this->_getListHeaders(),
        );
    }
}
