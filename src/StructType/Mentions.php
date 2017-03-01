<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Mentions StructType
 * @subpackage Structs
 */
class Mentions extends AbstractStructBase
{
    /**
     * The Mention
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Misiv\StructType\Mention
     */
    public $Mention;
    /**
     * Constructor method for Mentions
     * @uses Mentions::setMention()
     * @param \Misiv\StructType\Mention $mention
     */
    public function __construct(\Misiv\StructType\Mention $mention = null)
    {
        $this
            ->setMention($mention);
    }
    /**
     * Get Mention value
     * @return \Misiv\StructType\Mention|null
     */
    public function getMention()
    {
        return $this->Mention;
    }
    /**
     * Set Mention value
     * @param \Misiv\StructType\Mention $mention
     * @return \Misiv\StructType\Mentions
     */
    public function setMention(\Misiv\StructType\Mention $mention = null)
    {
        $this->Mention = $mention;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\Mentions
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
