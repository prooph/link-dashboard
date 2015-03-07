<?php
/*
* This file is part of prooph/link.
 * (c) prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Date: 06.12.14 - 21:50
 */

namespace Prooph\Link\Dashboard\View;

use Assert\Assertion;
use Zend\View\Model\ViewModel;

/**
 * Class DashboardWidget
 *
 * @package Dashboard\View
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
class DashboardWidget extends ViewModel
{
    /**
     * @param string $template
     * @param string $title
     * @param int $requiredCols
     * @param null|array|\Traversable $variables
     * @param null $newGroup
     * @return DashboardWidget
     */
    public static function initialize($template, $title, $requiredCols, $variables = null, $newGroup = null)
    {
        Assertion::string($template);
        Assertion::string($title);
        Assertion::integer($requiredCols);
        Assertion::min($requiredCols, 1);
        Assertion::max($requiredCols, 12);

        $options = [
            'required_cols' => $requiredCols,
            'title' => $title,
            'new_group' => $newGroup,
        ];

        $model = new self($variables, $options);

        $model->setTemplate($template);

        return $model;
    }

    /**
     * @return int
     */
    public function getRequiredCols()
    {
        return $this->getOption('required_cols');
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getOption('title');
    }

    /**
     * @return bool
     */
    public function startsNewGroup()
    {
        return !is_null($this->getOption('new_group'));
    }

    /**
     * @return string
     */
    public function newGroupTitle()
    {
        return $this->getOption('new_group', '');
    }
}
 