<?php

namespace Account;

use Zend\Mvc\ModuleRouteListener;

class Module extends \Application\Module
{
    public function getConfig()
    {
        $config = array_merge_recursive(parent::getConfig(), include __DIR__ . '/config/module.config.php');

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
                'Account\Model\UserTable' =>  function($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $table     = new \Zend\Db\TableGateway\TableGateway('user', $dbAdapter);
                    return $table;
                },
            ),
        );
    }
}
