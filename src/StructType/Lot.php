<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Lot StructType
 * @subpackage Structs
 */
class Lot extends AbstractStructBase
{
    /**
     * The Demarche
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeDemarche
     */
    public $Demarche;
    /**
     * The Origine
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Origine;
    /**
     * The Canal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Canal;
    /**
     * Constructor method for Lot
     * @uses Lot::setDemarche()
     * @uses Lot::setOrigine()
     * @uses Lot::setCanal()
     * @param \Misiv\StructType\TypeDemarche $demarche
     * @param string $origine
     * @param string $canal
     */
    public function __construct(\Misiv\StructType\TypeDemarche $demarche = null, $origine = null, $canal = null)
    {
        $this
            ->setDemarche($demarche)
            ->setOrigine($origine)
            ->setCanal($canal);
    }
    /**
     * Get Demarche value
     * @return \Misiv\StructType\TypeDemarche
     */
    public function getDemarche()
    {
        return $this->Demarche;
    }
    /**
     * Set Demarche value
     * @param \Misiv\StructType\TypeDemarche $demarche
     * @return \Misiv\StructType\Lot
     */
    public function setDemarche(\Misiv\StructType\TypeDemarche $demarche = null)
    {
        $this->Demarche = $demarche;
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
     * @return \Misiv\StructType\Lot
     */
    public function setOrigine($origine = null)
    {
        $this->Origine = $origine;
        return $this;
    }
    /**
     * Get Canal value
     * @return string|null
     */
    public function getCanal()
    {
        return $this->Canal;
    }
    /**
     * Set Canal value
     * @uses \Misiv\EnumType\TypeCanal::valueIsValid()
     * @uses \Misiv\EnumType\TypeCanal::getValidValues()
     * @param string $canal
     * @return \Misiv\StructType\Lot
     */
    public function setCanal($canal = null)
    {
        if (!\Misiv\EnumType\TypeCanal::valueIsValid($canal)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $canal, implode(', ', \Misiv\EnumType\TypeCanal::getValidValues())), __LINE__);
        }
        $this->Canal = $canal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\Lot
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
