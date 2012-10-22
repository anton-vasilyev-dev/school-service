<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'ckeditor_upload' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/ckeditor/upload/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\CkEditor',
                        'action'     => 'upload',
                    ),
                ),
            ),
            'ckeditor_browse' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/ckeditor/browse/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\CkEditor',
                        'action'     => 'browse',
                    ),
                ),
            ),
            'content-manage' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/content-manage/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'content',
                    ),
                ),
            ),
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
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController',
            'Application\Controller\CkEditor' => 'Application\Controller\CkEditorController'
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/not-found',
        'exception_template'       => 'error/exception',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/not-found'         => __DIR__ . '/../view/error/not-found.phtml',
            'error/exception'         => __DIR__ . '/../view/error/exception.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
