<?php
/**
 * Twigsession plugin for Craft CMS 3.x
 *
 * Twigsession
 *
 * @link      https://github.com/jhordangab/
 * @copyright Copyright (c) 2018 jhordangab
 */

namespace jhordangab\twigsession\variables;

use jhordangab\twigsession\Twigsession;

use Craft;

/**
 * Twigsession Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.twigsession }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    jhordangab
 * @package   Twigsession
 * @since     1.0.0
 */
class TwigsessionVariable
{
    public function set($key, $value)
    {
      Craft::$app->getSession()->set($key, $value);
    }

    public function get($key)
    {
      Craft::$app->getSession()->get($key);
    }
}
