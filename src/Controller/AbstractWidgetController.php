<?php
/*
* This file is part of prooph/link.
 * (c) prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Date: 06.12.14 - 22:33
 */

namespace Prooph\Link\Dashboard\Controller;

use Prooph\Link\Application\Service\AbstractQueryController;
use Prooph\Link\Dashboard\View\DashboardWidget;
use Prooph\Link\Dashboard\View\WidgetConfig;

/**
 * Class AbstractWidgetController
 *
 * @package Dashboard\Controller
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
abstract class AbstractWidgetController extends AbstractQueryController
{
    /**
     * @var WidgetConfig
     */
    protected $widgetConfig;

    /**
     * @return DashboardWidget
     */
    abstract public function widgetAction();

    /**
     * @param WidgetConfig $widgetConfig
     */
    public function setWidgetConfig(WidgetConfig $widgetConfig)
    {
        $this->widgetConfig = $widgetConfig;
    }
}
 