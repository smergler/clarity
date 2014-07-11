<?php
/**
 * Configuration file generated by ZFTool
 * The previous configuration file is stored in module.config.old
 *
 * @see https://github.com/zendframework/ZFTool
 */
return array(
    /* Removed
    'doctrine' => array(
        'driver' => array(
            'search_entities' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/Search/Entity')
            ),

            'orm_default' => array(
                'drivers' => array(
                    'Search\Entity' => 'search_entities')
            ),
        )
    ),
    */

    'router' => array(
        'routes' => array(
            'search' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/search',
                    'defaults' => array(
                        'controller' => 'Search\Controller\Search',
                        'action'     => 'index',
                    ),
                ),
            ),

            'form'  => array(
                'type'  => 'segment',
                'options'    => array(
                    'route' =>  '/form[/][/:id]',
                    'constraints'   =>  array(
//                        'action'    =>  '[a-zA-Z]*',
                        'id'    =>  '[0-9a-zA-Z]+',
                    ),

                    'defaults'  =>  array(
                        'controller'    => 'Search\Controller\Form',
                        'action'        =>  'index',

                    ),
                ),
            ),


            'quicksearch'  => array(
                'type'  => 'Zend\Mvc\Router\Http\Literal',
                'options'    => array(
                    'route' =>  '/search/quicksearch',

                    'defaults'  =>  array(
                        'controller'    => 'Search\Controller\Search',
                        'action'        =>  'quicksearch',

                    ),
                ),
            ),
        ),
    ),

    'controllers' => array('invokables' => array('Search\Controller\Search' => 'Search\Controller\SearchController',
                                                 'Search\Controller\Form'   => 'Search\Controller\FormController'
                                                )
    ),

    'view_manager' => array('template_path_stack' => array(__DIR__ . '/../view')),


    'di' => array(
    'services' => array(
        'Search' => 'Search\Model\SearchTable')),

);
