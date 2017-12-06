<?php
/**
 * Collections plugin for Craft CMS
 *
 * Collections Variable
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   Collections
 * @since     1.0.0
 */

namespace Craft;

use Illuminate\Support\Collection;

class CollectionsVariable
{
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