<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Reponse StructType
 * @subpackage Structs
 */
class Reponse extends AbstractStructBase
{
    /**
     * The Negative
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\Negative
     */
    public $Negative;
    /**
     * The Positive
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\Positive
     */
    public $Positive;
    /**
     * Constructor method for Reponse
     * @uses Reponse::setNegative()
     * @uses Reponse::setPositive()
     * @param \Misiv\StructType\Negative $negative
     * @param \Misiv\StructType\Positive $positive
     */
    public function __construct(\Misiv\StructType\Negative $negative = null, \Misiv\StructType\Positive $positive = null)
    {
        $this
            ->setNegative($negative)
            ->setPositive($positive);
    }
    /**
     * Get Negative value
     * @return \Misiv\StructType\Negative
     */
    public function getNegative()
    {
        return $this->Negative;
    }
    /**
     * Set Negative value
     * @param \Misiv\StructType\Negative $negative
     * @return \Misiv\StructType\Reponse
     */
    public function setNegative(\Misiv\StructType\Negative $negative = null)
    {
        $this->Negative = $negative;
        return $this;
    }
    /**
     * Get Positive value
     * @return \Misiv\StructType\Positive
     */
    public function getPositive()
    {
        return $this->Positive;
    }
    /**
     * Set Positive value
     * @param \Misiv\StructType\Positive $positive
     * @return \Misiv\StructType\Reponse
     */
    public function setPositive(\Misiv\StructType\Positive $positive = null)
    {
        $this->Positive = $positive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\Reponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
