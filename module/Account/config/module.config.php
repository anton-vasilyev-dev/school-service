<?php

return array(
    'router' => array(
        'routes' => array(
            'account_entity' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/account/[:action/][page/:page/][id/:id/]',
                    'constraints' => array(
                        'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'        => '[0-9]+',
                        'page'      => '[0-9]+'
                    ),
                    'defaults' => array(
                        'controller' => 'Account\Controller\Index',
                        'action'     => 'index',
                        'id'         => 0,
                        'page'       => '1',
                    ),
                ),
            ),
            'account_login' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/account/login/',
                    'defaults' => array(
                        'controller' => 'Account\Controller\Auth',
                        'action'     => 'login'
                    ),
                ),
            ),
            'account_logout' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/account/logout/',
                    'defaults' => array(
                        'controller' => 'Account\Controller\Auth',
                        'action'     => 'logout'
                    ),
                ),
            ),
            'account_registration' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/account/registration/',
                    'defaults' => array(
                        'controller' => 'Account\Controller\Index',
                        'action'     => 'registration'
                    ),
                ),
            ),
        ),
    ),
    'translator' => array(
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Account\Controller\Auth'  => 'Account\Controller\AuthController',
            'Account\Controller\Index' => 'Account\Controller\IndexController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    )
);
