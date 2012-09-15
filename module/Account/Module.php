<?php

namespace Account;

use Zend\Mvc\ModuleRouteListener;

class Module extends \Application\Module
{
    public function getConfig()
    {
        return array_merge_recursive(include __DIR__ . '/config/module.config.php', parent::getConfig());
    }

    public function getAutoloaderConfig()
    {
        return array_merge_recursive(array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        ), parent::getAutoloaderConfig());
    }
}
