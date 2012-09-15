<?php

return array(
    'router' => array(
        'routes' => array(
            'account' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/account',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Account\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'         => '[0-9]*'
                            ),
                            'defaults' => array(
                                'controller' => 'index',
                                'action'     => 'index',
                                'id'         => 0
                            ),
                        ),
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
            'Account\Controller\Auth'  => 'Album\Controller\AuthController',
            'Account\Controller\Index' => 'Album\Controller\IndexController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    )
);
