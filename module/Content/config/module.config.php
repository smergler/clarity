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
//            'apis'   =>  array(
//                'type'  =>  'Zend\Mvc\Router\Http\Literal',
//                'options'   =>  array(
//                    'route' =>  '/api-feeds',
//                    'defaults'  =>  array(
//                        'controller'    =>  'Content\ContentForm\Controller\AjaxLoader',
//                        'action'        =>  'magento',
//                    ),
//                ),
//            ),
            'search' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/content/search',
                    'defaults' => array(
                        'controller' => 'Content\ContentForm\Controller\Search',
                        'action'     => 'index',
                    ),
                ),
            ),
            'quicksearch'  => array(
                        'type'  => 'Zend\Mvc\Router\Http\Literal',
                        'options'    => array(
                            'route' =>  '/content/search/quicksearch',
                            'defaults'  =>  array(
                                'controller'    => 'Content\AJAXLoader\Controller\AjaxLoader',
                                'action'        =>  'quicksearch',

                            ),
                        ),
                    ),

//            'may_terminate' => true,
//            ),
            'form'  => array(
                        'type'  => 'segment',
                        'options'    => array(
                            'route' =>  '/content/product[/][/:sku]',
                            'constraints'   =>  array(
                                'sku'    =>  '[0-9a-zA-Z\-]+',
                            ),
                            'defaults'  =>  array(
                                'controller'    => 'Content\ContentForm\Controller\Products',
                                'action'        =>  'index',
                            ),
                        ),
                    ),
            'mfcload'  => array(
                'type'  => 'Zend\Mvc\Router\Http\Literal',
                'options'    => array(
                    'route' =>  '/content/product/manufacturerload',

                    'defaults'  =>  array(
                        'controller'    => 'Content\AJAXLoader\Controller\AjaxLoader',
                        'action'        =>  'manufacturerLoad',

                    ),
                ),
            ),

            'categoryload'  => array(
                'type'  => 'Zend\Mvc\Router\Http\Literal',
                'options'    => array(
                    'route' =>  '/content/product/categoryload',

                    'defaults'  =>  array(
                        'controller'    => 'Content\AJAXLoader\Controller\AjaxLoader',
                        'action'        =>  'loadCategories',

                    ),
                ),
            ),

            'brand'  => array(
                        'type'  => 'Zend\Mvc\Router\Http\Literal',
                        'options'    => array(
                            'route' =>  '/content/product/brandload',
                            'defaults'  =>  array(
                                'controller'    => 'Content\AJAXLoader\Controller\AjaxLoader',
                                'action'        =>  'brandLoad',
                            ),
                        ),
                    ),
            'loadaccessories'  => array(
                'type'  => 'Zend\Mvc\Router\Http\Literal',
                'options'    => array(
                    'route' =>  '/content/product/accessories',
                    'defaults'  =>  array(
                        'controller'    => 'Content\AJAXLoader\Controller\AjaxLoader',
                        'action'        =>  'loadAccessories',
                    ),
                ),
            ),
//this imagesave might change for controller since we are making an ajaxloader directory under content
            'imagesave'  => array(
                'type'  => 'Zend\Mvc\Router\Http\Literal',
                'options'    => array(
                    'route' =>  '/content/products/imagesave',

                    'defaults'  =>  array(
                        'controller'    => 'Content\AJAXLoader\Controller\AjaxLoader',
                        'action'        =>  'imageSave',
                    ),
                ),
            ),
//this submitform might change for controller since we are making an ajaxloader directory under content
            'submitform'  => array(
                'type'  => 'Zend\Mvc\Router\Http\Literal',
                'options'    => array(
                    'route' =>  '/content/product/submit',
                    'defaults'  =>  array(
                        'controller'    => 'Content\AJAXLoader\Controller\AjaxLoader',
                        'action'        =>  'submitForm',

                    ),
                ),
            ),

            'webassignment'  => array(
                'type'  => 'Zend\Mvc\Router\Http\Literal',
                'options'    => array(
                    'route' =>  '/content/webassignment',
                    'defaults'  =>  array(
                        'controller'    => 'Content\WebAssignment\Controller\WebAssignment',
                        'action'        =>  'index',

                    ),
                ),
            ),
//this webassignmentsubmit might change for controller since we are making an ajaxloader directory under content
            'webassignmentsubmit'  => array(
                'type'  => 'Zend\Mvc\Router\Http\Literal',
                'options'    => array(
                    'route' =>  '/content/websiteassignment/submit',
                    'defaults'  =>  array(
                        'controller'    => 'Content\WebAssignment\Controller\WebAssignment',
                        'action'        =>  'submitForm',
                    ),
                ),
            ),

            'apimanage'  => array(
                'type'  => 'Zend\Mvc\Router\Http\Literal',
                'options'    => array(
                    'route' =>  '/content/cron-management',
                    'defaults'  =>  array(
                        'controller'    => 'Content\CronManagement\Controller\CronManagement',
                        'action'        =>  'index',
                    ),
                ),
            ),
            'manageattributes'  => array(
                'type'  => 'Zend\Mvc\Router\Http\Literal',
                'options'    => array(
                    'route' =>  '/content/attributemanagement',
                    'defaults'  =>  array(
                        'controller'    => 'Content\ManageAttributes\Controller\Attributes',
                        'action'        =>  'index',
                    ),
                ),
            ),
            'manageattributesquicksearch'  => array(
                'type'  => 'Zend\Mvc\Router\Http\Literal',
                'options'    => array(
                    'route' =>  '/content/attributemanagement/attributes/quicksearch',
                    'defaults'  =>  array(
                        'controller'    => 'Content\AJAXLoader\Controller\AttributesAjax',
                        'action'        =>  'attributesQuickSearch',
                    ),
                ),
            ),
            'manageattributessubmit'  => array(
                'type'  => 'Zend\Mvc\Router\Http\Literal',
                'options'    => array(
                    'route' =>  '/content/attributemanagement/attributes/submit',
                    'defaults'  =>  array(
                        'controller'    => 'Content\AJAXLoader\Controller\AttributesAjax',
                        'action'        =>  'attributesSubmitForm',
                    ),
                ),
            ),


            'manageoptionsquicksearch'  => array(
                'type'  => 'Zend\Mvc\Router\Http\Literal',
                'options'    => array(
                    'route' =>  '/content/attributemanagement/options/quicksearch',
                    'defaults'  =>  array(
                        'controller'    => 'Content\AJAXLoader\Controller\AttributesAjax',
                        'action'        =>  'optionsQuickSearch',
                    ),
                ),
            ),
        ),
    ),

    'controllers' => array('invokables' => array('Content\ContentForm\Controller\Products' => 'Content\ContentForm\Controller\ProductsController',
                                                 'Content\ContentForm\Controller\Search'   => 'Content\ContentForm\Controller\SearchController',
                                                 'Content\WebAssignment\Controller\WebAssignment'   => 'Content\WebAssignment\Controller\WebAssignmentController',
                                                 'Content\AJAXLoader\Controller\AjaxLoader'   => 'Content\AJAXLoader\Controller\AjaxLoaderController',
                                                 'Content\ManageAttributes\Controller\Attributes'   => 'Content\ManageAttributes\Controller\AttributesController',
                                                 'Content\AjaxLoader\Controller\AttributesAjax'   => 'Content\AjaxLoader\Controller\AttributesAjaxController',
                                                 'Content\CronManagement\Controller\CronManagement'   => 'Content\CronManagement\Controller\CronManagementController',
                                                )
    ),
    'event_listener_construct' =>  array(
        'logger'  =>  array(
            'extra'    =>  array(
                'entity_id' => 'entity_id',
                'sku'   =>  'sku',
                'oldvalue'  =>  'oldvalue',
                'newvalue'  =>  'newvalue',
                'datechanged'   =>  'datechanged',
                'changedby' =>  'changedby',
                'property'  =>  'property',
            ),
        ),
        'mage_logs'  =>  array(
            'extra'    =>  array(
                'sku' => 'sku',
                'resource'   =>  'resource',
                'speed'  =>  'speed',
                'pushedby'  =>  'pushedby',
                'datepushed'   =>  'datepushed',
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(__DIR__ . '/../view'),
    ),


//    'di' => array(
//    'services' => array(
//        'Search' => 'Search\Model\SearchTable')
//    ),

);
