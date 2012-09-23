<?php

return array(
    'router' => array(
        'routes' => array(
            'page_entity' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/page/[:action/][page/:page/][id/:id/]',
                    'constraints' => array(
                        'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'        => '[0-9]+',
                        'page'      => '[0-9]+'
                    ),
                    'defaults' => array(
                        'controller' => 'Page\Controller\Index',
                        'action'     => 'index',
                        'id'         => 0,
                        'page'       => '1',
                    ),
                ),
            ),
            'page_show' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/info/[:alias/]',
                    'constraints' => array(
                        'action'    => 'show',
                        'alias'     => '[a-zA-Z0-9_-]*'
                    ),
                    'defaults' => array(
                        'controller' => 'Page\Controller\Index',
                        'action'     => 'show',
                    ),
                ),
            ),
            'page_registration_result' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/account/registration-result/',
                    'constraints' => array(
                        'action'    => 'show',
                        'alias'     => 'registration-result'
                    ),
                    'defaults' => array(
                        'controller' => 'Page\Controller\Index',
                        'action'     => 'show',
                        'alias'      => 'registration-result'
                    ),
                ),
            )
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
            'Page\Controller\Index' => 'Page\Controller\IndexController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    )
);
