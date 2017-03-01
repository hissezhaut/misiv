<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ouvrir_Req StructType
 * @subpackage Structs
 */
class Ouvrir_Req extends AbstractStructBase
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
     * The IDDemarche
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $IDDemarche;
    /**
     * The TypeDemarche
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TypeDemarche;
    /**
     * Constructor method for Ouvrir_Req
     * @uses Ouvrir_Req::setIdentification()
     * @uses Ouvrir_Req::setIDDemarche()
     * @uses Ouvrir_Req::setTypeDemarche()
     * @param \Misiv\StructType\TypeIdentification $identification
     * @param int $iDDemarche
     * @param string $typeDemarche
     */
    public function __construct(\Misiv\StructType\TypeIdentification $identification = null, $iDDemarche = null, $typeDemarche = null)
    {
        $this
            ->setIdentification($identification)
            ->setIDDemarche($iDDemarche)
            ->setTypeDemarche($typeDemarche);
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
     * @return \Misiv\StructType\Ouvrir_Req
     */
    public function setIdentification(\Misiv\StructType\TypeIdentification $identification = null)
    {
        $this->Identification = $identification;
        return $this;
    }
    /**
     * Get IDDemarche value
     * @return int
     */
    public function getIDDemarche()
    {
        return $this->IDDemarche;
    }
    /**
     * Set IDDemarche value
     * @param int $iDDemarche
     * @return \Misiv\StructType\Ouvrir_Req
     */
    public function setIDDemarche($iDDemarche = null)
    {
        $this->IDDemarche = $iDDemarche;
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
     * @return \Misiv\StructType\Ouvrir_Req
     */
    public function setTypeDemarche($typeDemarche = null)
    {
        $this->TypeDemarche = $typeDemarche;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\Ouvrir_Req
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
