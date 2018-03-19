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
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.twigsession.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.twigsession.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
