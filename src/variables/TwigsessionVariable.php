<?php
/**
 * Twig Session plugin for Craft CMS 3.x
 *
 * Twig session
 *
 * @link      https://github.com/jhordangab/
 * @copyright Copyright (c) 2018 jhordangab
 */

namespace jhordangab\twigsession\variables;

use jhordangab\twigsession\TwigSession;

use Craft;

/**
 * Twig Session Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.twigSession }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    jhordangab
 * @package   TwigSession
 * @since     1.0.4
 */
class TwigSessionVariable
{
    public function set($key, $value)
    {
        Craft::$app->getSession()->set($key, $value);
    }
    
    public function get($key)
    {
        return Craft::$app->getSession()->get($key);
    }
}
