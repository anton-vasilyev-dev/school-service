<?php

return array(
    'router' => array(
        'routes' => array(
            'class_entity' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/school/class/[:action/][page/:page/][id/:id/]',
                    'constraints' => array(
                        'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'        => '[0-9]+',
                        'page'      => '[0-9]+'
                    ),
                    'defaults' => array(
                        'controller' => 'School\Controller\Class',
                        'action'     => 'index',
                        'id'         => 0,
                        'page'       => '1',
                    ),
                ),
            ),
            'subject_entity' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/school/subject/[:action/][page/:page/][id/:id/]',
                    'constraints' => array(
                        'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'        => '[0-9]+',
                        'page'      => '[0-9]+'
                    ),
                    'defaults' => array(
                        'controller' => 'School\Controller\Subject',
                        'action'     => 'index',
                        'id'         => 0,
                        'page'       => '1',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'School\Controller\Class'   => 'School\Controller\ClassController',
            'School\Controller\Subject' => 'School\Controller\SubjectController',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'ru_RU',
        'translation_file_patterns' => array(
            array(
                'type' => 'phparray',
                'base_dir' => __DIR__. '/../language/',
                'pattern' => '%s.php'
            )
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    )
);
