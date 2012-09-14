<?php

namespace Application\Controller;

use Exception;
use Zend\Paginator;
use Zend\Paginator\Adapter;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model;
use Application\Form;

class EntityController extends AbstractActionController
{
    protected $_formName;

    /**
     * @var
     */
    protected $_mapperName;

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
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $model = $this->_getMappper()->create();
            $form->setInputFilter($model->getInputFilter());
            $form->setData($request->getPost());

            if ($form->isValid()) {
                $model->exchangeArray($form->getData());
                $this->_getMappper()->save($model);

                return $this->redirect()->toRoute('edit');
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
        $form->bind($model);
        $form->get('submit')->setAttribute('value', 'Edit');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setInputFilter($model->getInputFilter());
            $form->setData($request->getPost());

            if ($form->isValid()) {
                $this->_getMappper()->save($model);

                return $this->redirect()->toRoute('edit');
            }
        }

        return array(
            'id'   => $id,
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

        return $this->redirect()->toRoute('index');
    }

    public function indexAction()
    {
        $adapter = new DbSelect($this->_getMappper()->getTable()->sql());
        $paginator = new Paginator($adapter);
        $paginator->setCurrentPageNumber($this->params()->fromRoute('page'));

        return array(
            'paginator' => $paginator,
            'headers'   => $this->_getListHeaders()
        );
    }
}
