<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Chercher_Req StructType
 * @subpackage Structs
 */
class Chercher_Req extends AbstractStructBase
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
     * The TypeDemarche
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TypeDemarche;
    /**
     * The Immatriculation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 10
     * - minLength: 7
     * - pattern: ([A-Z]{1,2}(-|\s)?\d{2,3}(-|\s)?[A-Z]{1,2})|(\d{1,4}\s?[A-Z]{2,3}\s?(2[AB]|\d{1,3}))
     * @var string
     */
    public $Immatriculation;
    /**
     * Constructor method for Chercher_Req
     * @uses Chercher_Req::setIdentification()
     * @uses Chercher_Req::setTypeDemarche()
     * @uses Chercher_Req::setImmatriculation()
     * @param \Misiv\StructType\TypeIdentification $identification
     * @param string $typeDemarche
     * @param string $immatriculation
     */
    public function __construct(\Misiv\StructType\TypeIdentification $identification = null, $typeDemarche = null, $immatriculation = null)
    {
        $this
            ->setIdentification($identification)
            ->setTypeDemarche($typeDemarche)
            ->setImmatriculation($immatriculation);
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
     * @return \Misiv\StructType\Chercher_Req
     */
    public function setIdentification(\Misiv\StructType\TypeIdentification $identification = null)
    {
        $this->Identification = $identification;
        return $this;
    }
    /**
     * Get TypeDemarche value
     * @return string
     */
    public function getTypeDemarche()
    {
        return $this->TypeDemarche;
    }
    /**
     * Set TypeDemarche value
     * @param string $typeDemarche
     * @return \Misiv\StructType\Chercher_Req
     */
    public function setTypeDemarche($typeDemarche = null)
    {
        $this->TypeDemarche = $typeDemarche;
        return $this;
    }
    /**
     * Get Immatriculation value
     * @return string|null
     */
    public function getImmatriculation()
    {
        return $this->Immatriculation;
    }
    /**
     * Set Immatriculation value
     * @param string $immatriculation
     * @return \Misiv\StructType\Chercher_Req
     */
    public function setImmatriculation($immatriculation = null)
    {
        $this->Immatriculation = $immatriculation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\Chercher_Req
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
