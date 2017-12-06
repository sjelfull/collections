<?php
/**
 * Collections plugin for Craft CMS
 *
 * Collections Service
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   Collections
 * @since     1.0.0
 */

namespace Craft;

use Illuminate\Support\Collection;

class CollectionsService extends BaseApplicationComponent
{
    public function init ()
    {
        $macros = craft()->config->get('macros', 'collections');

        if ( $macros ) {
            foreach ($macros as $key => $macro) {
                Collection::macro($key, $macro);
            }
        }
    }

    /**
     * @param null|array $collection
     *
     * @return Collection
     */
    public function collect ($collection = [])
    {
        return new Collection($collection);
    }


}