<?php
/*
* This file is part of prooph/link.
 * (c) prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Date: 06.12.14 - 21:26
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Prooph\Link\Dashboard\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => [
            'prooph.link.dashboard_provider' => 'Prooph\Link\Dashboard\Service\Factory\DashboardProviderFactory'
        ],
    ),
    'controllers' => array(
        'invokables' => array(
            'Prooph\Link\Dashboard\Controller\Index' => 'Prooph\Link\Dashboard\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
            'application/index/index' => __DIR__ . '/../view/dashboard/index/index.phtml',
        ),
    ),
    'view_helpers' => array(
        'factories'=> array(
            'proophLinkDashboard' => 'Prooph\Link\Dashboard\View\Helper\Factory\DashboardHelperFactory'
        )
    ),
    // Placeholder for AbstractWidgetControllers
    'prooph.link.dashboard' => [
        /*
        'widget_name' => [
            'controller' => 'controller_alias_loaded_via_controller_loader',
            'order' => 1 //-> order by ASC
        ]
        */
    ],
);
