<?php

namespace School;

use Zend\Mvc\ModuleRouteListener;

class Module extends \Application\Module
{
    public function getConfig()
    {
        $config = include __DIR__ . '/config/module.config.php';

        return $config;
    }

    public function getAutoloaderConfig()
    {
        $config = array_merge_recursive(parent::getAutoloaderConfig(), array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        ));

        return $config;
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'School\Model\ClassTable' =>  function($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $table     = new \Zend\Db\TableGateway\TableGateway('class', $dbAdapter);
                    return $table;
                },
                'School\Model\SubjectTable' =>  function($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $table     = new \Zend\Db\TableGateway\TableGateway('subject', $dbAdapter);
                    return $table;
                },
            ),
        );
    }
}
