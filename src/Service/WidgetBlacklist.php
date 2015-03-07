<?php
/*
 * This file is part of prooph/link.
 * (c) 2014-2015 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Date: 3/7/15 - 2:17 PM
 */

namespace Prooph\Link\Dashboard\Service;

/**
 * Interface WidgetBlacklist
 *
 * Implement this interface and make it available via ServiceManager
 * under the service name prooph.link.dashboard.widget_blacklist
 * to exclude widgets based on their name.
 *
 * @package Prooph\Link\Dashboard\Service
 * @author Alexander Miertsch <alexander.miertsch.extern@sixt.com>
 */
interface WidgetBlacklist 
{
    /**
     * @param string $widgetName
     * @return bool
     */
    public function isWidgetOnList($widgetName);
} 