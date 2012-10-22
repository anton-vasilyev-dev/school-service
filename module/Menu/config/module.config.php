<?php

return array(
    'router' => array(
        'routes' => array(
            'menu_entity' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/menu-manage/[:action/][page/:page/][id/:id/]',
                    'constraints' => array(
                        'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'        => '[0-9]+',
                        'page'      => '[0-9]+'
                    ),
                    'defaults' => array(
                        'controller' => 'Menu\Controller\Index',
                        'action'     => 'index',
                        'id'         => 0,
                        'page'       => '1',
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
            'Menu\Controller\Index' => 'Menu\Controller\IndexController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    )
);
