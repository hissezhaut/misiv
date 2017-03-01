<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InfoImmat_Req StructType
 * @subpackage Structs
 */
class InfoImmat_Req extends AbstractStructBase
{
    /**
     * The Identification
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeIdentification
     */
    public $Identification;
    /**
     * The Immatriculation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 10
     * - minLength: 7
     * - pattern: ([A-Z]{1,2}(-|\s)?\d{2,3}(-|\s)?[A-Z]{1,2})|(\d{1,4}\s?[A-Z]{2,3}\s?(2[AB]|\d{1,3}))
     * @var string
     */
    public $Immatriculation;
    /**
     * The ModeString
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $ModeString;
    /**
     * The Origine
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Origine;
    /**
     * Constructor method for InfoImmat_Req
     * @uses InfoImmat_Req::setIdentification()
     * @uses InfoImmat_Req::setImmatriculation()
     * @uses InfoImmat_Req::setModeString()
     * @uses InfoImmat_Req::setOrigine()
     * @param \Misiv\StructType\TypeIdentification $identification
     * @param string $immatriculation
     * @param boolean $modeString
     * @param string $origine
     */
    public function __construct(\Misiv\StructType\TypeIdentification $identification = null, $immatriculation = null, $modeString = null, $origine = null)
    {
        $this
            ->setIdentification($identification)
            ->setImmatriculation($immatriculation)
            ->setModeString($modeString)
            ->setOrigine($origine);
    }
    /**
     * Get Identification value
     * @return \Misiv\StructType\TypeIdentification
     */
    public function getIdentification()
    {
        return $this->Identification;
    }
    /**
     * Set Identification value
     * @param \Misiv\StructType\TypeIdentification $identification
     * @return \Misiv\StructType\InfoImmat_Req
     */
    public function setIdentification(\Misiv\StructType\TypeIdentification $identification = null)
    {
        $this->Identification = $identification;
        return $this;
    }
    /**
     * Get Immatriculation value
     * @return string
     */
    public function getImmatriculation()
    {
        return $this->Immatriculation;
    }
    /**
     * Set Immatriculation value
     * @param string $immatriculation
     * @return \Misiv\StructType\InfoImmat_Req
     */
    public function setImmatriculation($immatriculation = null)
    {
        $this->Immatriculation = $immatriculation;
        return $this;
    }
    /**
     * Get ModeString value
     * @return boolean|null
     */
    public function getModeString()
    {
        return $this->ModeString;
    }
    /**
     * Set ModeString value
     * @param boolean $modeString
     * @return \Misiv\StructType\InfoImmat_Req
     */
    public function setModeString($modeString = null)
    {
        $this->ModeString = $modeString;
        return $this;
    }
    /**
     * Get Origine value
     * @return string|null
     */
    public function getOrigine()
    {
        return $this->Origine;
    }
    /**
     * Set Origine value
     * @param string $origine
     * @return \Misiv\StructType\InfoImmat_Req
     */
    public function setOrigine($origine = null)
    {
        $this->Origine = $origine;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\InfoImmat_Req
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
