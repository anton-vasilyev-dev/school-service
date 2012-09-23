<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CkEditorController extends AbstractActionController
{
    protected $_uploadPath = '/upload/ckeditor/';

    protected $_fileOnPage = 15;

    protected function _filterExtension($value)
    {
        preg_match('/.*\.(gif|jpg|jpeg|bmp|png)$/i', $value, $res);
        return (isset($res[1]));
    }

    public function browseAction()
    {
        $page = $this->params()->fromRoute('page', 1);

        $files = array();
        exec("ls '{$_SERVER['DOCUMENT_ROOT']}{$this->_uploadPath}' -1", $out);

        $files = $out;

        $paginator = new \Zend\Paginator\Paginator(new \Zend\Paginator\Adapter\ArrayAdapter($files));
        $paginator->setCurrentPageNumber($this->params()->fromRoute('page'))
            ->setItemCountPerPage($this->_fileOnPage)
            ->setDefaultScrollingStyle('Sliding');

        return array(
            'files' => array_slice($files, ($page - 1) * $this->_fileOnPage, $this->_fileOnPage),
            'path'  => $this->_uploadPath,
            'paginator' => $paginator,
            'request' => $this->params()
        );
    }

    public function uploadAction()
    {
        $this->
        $this->getView()->setNoRender(true);
        $funcNum = $this->getRequest()->getParam('CKEditorFuncNum');

        foreach ($_FILES as $file) {
            $checkName = $name = $_SERVER['DOCUMENT_ROOT'] . $this->_uploadPath . $file['name'];
            $i = 1;
            while (file_exists($checkName)) {
                $info = pathinfo($checkName);
                $n = preg_replace('/_\(\d+\)$/', '', $info['filename']);
                $checkName = sprintf("%s/%s_({$i}).%s", $info['dirname'], $n, $info['extension']);
                $i++;
            }

            move_uploaded_file($file['tmp_name'], $checkName);
        }
        $fileServerName = $this->_uploadPath . basename($checkName);
        $message = '';
        if ($i != 1) {
            $message = "Файл на сервере был переименован в ". basename($checkName). ".";
        }

        $this->getView()->headMeta()->appendHttpEquiv('Content-Type', 'text/html; charset=UTF-8');
        $this->getView()->headMeta()->appendHttpEquiv('X-UA-Compatible', 'IE=8');
        $this->getView()->headScript()->appendScript("
            window.parent.CKEDITOR.tools.callFunction({$funcNum}, '{$fileServerName}');
            if ('{$message}' != ''){
                window.parent.alertDialog({
                	text: '{$message}',
                	buttons: {
                		'OK': function(){
                			window.parent.$(this).dialog('close');
        				}
        			},
                	width: 450,
                	disableCloseButton: true,
                	enableCrossButton: true,
                	zIndex: 100000
        		});
    		}
        ");
    }
}
