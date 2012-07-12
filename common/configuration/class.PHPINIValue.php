<?php

error_reporting(E_ALL);

/**
 * Generis Object Oriented API - common\configuration\class.PHPINIValue.php
 *
 * $Id$
 *
 * This file is part of Generis Object Oriented API.
 *
 * Automatically generated on 12.07.2012, 14:57:03 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author Jerome Bogaerts, <jerome.bogaerts@tudor.lu>
 * @package common
 * @subpackage configuration
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include common_configuration_Component
 *
 * @author Jerome Bogaerts, <jerome.bogaerts@tudor.lu>
 */
require_once('common/configuration/class.Component.php');

/* user defined includes */
// section -64--88-56-1--548fa03:1387a8a40e2:-8000:0000000000001ACF-includes begin
// section -64--88-56-1--548fa03:1387a8a40e2:-8000:0000000000001ACF-includes end

/* user defined constants */
// section -64--88-56-1--548fa03:1387a8a40e2:-8000:0000000000001ACF-constants begin
// section -64--88-56-1--548fa03:1387a8a40e2:-8000:0000000000001ACF-constants end

/**
 * Short description of class common_configuration_PHPINIValue
 *
 * @access public
 * @author Jerome Bogaerts, <jerome.bogaerts@tudor.lu>
 * @package common
 * @subpackage configuration
 */
class common_configuration_PHPINIValue
    extends common_configuration_Component
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute expectedValue
     *
     * @access private
     */
    private $expectedValue = null;

    // --- OPERATIONS ---

    /**
     * Short description of method __construct
     *
     * @access public
     * @author Jerome Bogaerts, <jerome.bogaerts@tudor.lu>
     * @param  expectedValue
     * @param  string name
     * @param  boolean optional
     * @return mixed
     */
    public function __construct($expectedValue, $name = 'unknown', $optional = false)
    {
        // section -64--88-56-1--548fa03:1387a8a40e2:-8000:0000000000001B42 begin
        parent::__construct($name, $optional);
        $this->setExpectedValue($expectedValue);
        // section -64--88-56-1--548fa03:1387a8a40e2:-8000:0000000000001B42 end
    }

    /**
     * Short description of method check
     *
     * @access public
     * @author Jerome Bogaerts, <jerome.bogaerts@tudor.lu>
     * @return common_configuration_Report
     */
    public function check()
    {
        $returnValue = null;

        // section -64--88-56-1--548fa03:1387a8a40e2:-8000:0000000000001ADD begin
        // section -64--88-56-1--548fa03:1387a8a40e2:-8000:0000000000001ADD end

        return $returnValue;
    }

    /**
     * Short description of method getExpectedValue
     *
     * @access public
     * @author Jerome Bogaerts, <jerome.bogaerts@tudor.lu>
     * @return mixed
     */
    public function getExpectedValue()
    {
        // section -64--88-56-1--5c6a901d:1387b387fec:-8000:0000000000001B0C begin
        return $this->expectedValue;
        // section -64--88-56-1--5c6a901d:1387b387fec:-8000:0000000000001B0C end
    }

    /**
     * Short description of method setExpectedValue
     *
     * @access public
     * @author Jerome Bogaerts, <jerome.bogaerts@tudor.lu>
     * @param  expectedValue
     * @return mixed
     */
    public function setExpectedValue($expectedValue)
    {
        // section -64--88-56-1--5c6a901d:1387b387fec:-8000:0000000000001B0E begin
        $this->expectedValue = $expectedValue;
        // section -64--88-56-1--5c6a901d:1387b387fec:-8000:0000000000001B0E end
    }

} /* end of class common_configuration_PHPINIValue */

?>