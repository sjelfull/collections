<?php
/**
 * Collections plugin for Craft CMS
 *
 * Use Laravel Collections in Craft
 *
 * @author    Superbig
 * @copyright Copyright (c) 2017 Superbig
 * @link      https://superbig.co
 * @package   Collections
 * @since     1.0.0
 */

namespace Craft;

class CollectionsPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init ()
    {
        parent::init();

        if ( craft()->request->isSiteRequest() ) {
            require_once __DIR__ . '/vendor/autoload.php';
        }
    }

    /**
     * @return mixed
     */
    public function getName ()
    {
        return Craft::t('Collections');
    }

    /**
     * @return mixed
     */
    public function getDescription ()
    {
        return Craft::t('Use Laravel Collections in Craft');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl ()
    {
        return 'https://github.com/sjelfull/collections/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl ()
    {
        return 'https://raw.githubusercontent.com/sjelfull/collections/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion ()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion ()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper ()
    {
        return 'Superbig';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl ()
    {
        return 'https://superbig.co';
    }

    /**
     * @return bool
     */
    public function hasCpSection ()
    {
        return false;
    }

    /**
     * @return mixed
     */
    public function addTwigExtension ()
    {
        Craft::import('plugins.collections.twigextensions.CollectionsTwigExtension');

        return new CollectionsTwigExtension();
    }

    /**
     */
    public function onBeforeInstall ()
    {
    }

    /**
     */
    public function onAfterInstall ()
    {
    }

    /**
     */
    public function onBeforeUninstall ()
    {
    }

    /**
     */
    public function onAfterUninstall ()
    {
    }
}