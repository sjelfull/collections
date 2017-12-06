<?php
/**
 * Collections plugin for Craft CMS
 *
 * Collections Twig Extension
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   Collections
 * @since     1.0.0
 */

namespace Craft;

use Illuminate\Support\Collection;
use Twig_Extension;
use Twig_Filter_Method;

class CollectionsTwigExtension extends \Twig_Extension
{
    /**
     * @return string The extension name
     */
    public function getName ()
    {
        return 'Collections';
    }

    /**
     * @return array
     */
    public function getFilters ()
    {
        return array(
            'collect' => new \Twig_Filter_Method($this, 'collect'),
        );
    }

    /**
     * @return array
     */
    public function getFunctions ()
    {
        return array(
            'collect' => new \Twig_Function_Method($this, 'collect'),
        );
    }

    /**
     * @param null|array $collection
     *
     * @return Collection
     */
    public function collect ($collection = [])
    {
        return craft()->collections->collect($collection);
    }
}