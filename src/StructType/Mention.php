<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Mention StructType
 * @subpackage Structs
 */
class Mention extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Code;
    /**
     * The Valeur1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Valeur1;
    /**
     * The Valeur2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Valeur2;
    /**
     * Constructor method for Mention
     * @uses Mention::setCode()
     * @uses Mention::setValeur1()
     * @uses Mention::setValeur2()
     * @param string $code
     * @param string $valeur1
     * @param string $valeur2
     */
    public function __construct($code = null, $valeur1 = null, $valeur2 = null)
    {
        $this
            ->setCode($code)
            ->setValeur1($valeur1)
            ->setValeur2($valeur2);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Misiv\StructType\Mention
     */
    public function setCode($code = null)
    {
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Valeur1 value
     * @return string|null
     */
    public function getValeur1()
    {
        return $this->Valeur1;
    }
    /**
     * Set Valeur1 value
     * @param string $valeur1
     * @return \Misiv\StructType\Mention
     */
    public function setValeur1($valeur1 = null)
    {
        $this->Valeur1 = $valeur1;
        return $this;
    }
    /**
     * Get Valeur2 value
     * @return string|null
     */
    public function getValeur2()
    {
        return $this->Valeur2;
    }
    /**
     * Set Valeur2 value
     * @param string $valeur2
     * @return \Misiv\StructType\Mention
     */
    public function setValeur2($valeur2 = null)
    {
        $this->Valeur2 = $valeur2;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\Mention
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
