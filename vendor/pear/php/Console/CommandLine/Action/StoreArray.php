<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * This file is part of the PEAR Console_CommandLine package.
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to the MIT license that is available
 * through the world-wide-web at the following URI:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category  Console 
 * @package   Console_CommandLine
 * @author    David JEAN LOUIS <izimobil@gmail.com>
 * @copyright 2007 David JEAN LOUIS
 * @license   http://opensource.org/licenses/mit-license.php MIT License 
 * @version   CVS: $Id: StoreArray.php,v 1.2 2008/05/22 08:49:22 izi Exp $
 * @link      http://pear.php.net/package/Console_CommandLine
 * @since     File available since release 0.1.0
 */

/**
 * Required by this class.
 */
require_once 'Console/CommandLine/Action.php';

/**
 * Class that represent the StoreArray action.
 *
 * The execute method appends the value of the option entered by the user to 
 * the result option array entry.
 *
 * @category  Console
 * @package   Console_CommandLine
 * @author    David JEAN LOUIS <izimobil@gmail.com>
 * @copyright 2007 David JEAN LOUIS
 * @license   http://opensource.org/licenses/mit-license.php MIT License 
 * @version   Release: 1.0.0
 * @link      http://pear.php.net/package/Console_CommandLine
 * @since     Class available since release 0.1.0
 */
class Console_CommandLine_Action_StoreArray extends Console_CommandLine_Action
{
    // execute() {{{

    /**
     * Execute the action with the value entered by the user.
     *
     * @param mixed $value  the option value
     * @param array $params an optional array of parameters
     *
     * @return string
     * @access public
     */
    public function execute($value=false, $params=array())
    {
        $result = $this->getResult();
        if (null === $result) {
            $result = array();
        }
        $result[] = $value;
        $this->setResult($result);
    }
    // }}}
}

?>
