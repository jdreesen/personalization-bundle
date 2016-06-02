<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 * @package    Tool
 * @copyright  Copyright (c) 2009-2016 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Model\Tool\Targeting\Persona;

use Pimcore\Model;

class Listing extends Model\Listing\AbstractListing
{

    /**
     * Contains the results of the list. They are all an instance of Tool\Targeting\Persona
     *
     * @var array
     */
    public $personas = [];

    /**
     * Tests if the given key is an valid order key to sort the results
     *
     * @return boolean
     */
    public function isValidOrderKey($key)
    {
        return true;
    }

    /**
     * @param $personas
     * @return $this
     */
    public function setPersonas($personas)
    {
        $this->personas = $personas;
        return $this;
    }

    /**
     * @return array
     */
    public function getPersonas()
    {
        return $this->personas;
    }
}