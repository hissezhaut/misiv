<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Cotitulaires StructType
 * @subpackage Structs
 */
class Cotitulaires extends AbstractStructBase
{
    /**
     * The Cotitulaire
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Misiv\StructType\TypeCotitulaire
     */
    public $Cotitulaire;
    /**
     * Constructor method for Cotitulaires
     * @uses Cotitulaires::setCotitulaire()
     * @param \Misiv\StructType\TypeCotitulaire $cotitulaire
     */
    public function __construct(\Misiv\StructType\TypeCotitulaire $cotitulaire = null)
    {
        $this
            ->setCotitulaire($cotitulaire);
    }
    /**
     * Get Cotitulaire value
     * @return \Misiv\StructType\TypeCotitulaire|null
     */
    public function getCotitulaire()
    {
        return $this->Cotitulaire;
    }
    /**
     * Set Cotitulaire value
     * @param \Misiv\StructType\TypeCotitulaire $cotitulaire
     * @return \Misiv\StructType\Cotitulaires
     */
    public function setCotitulaire(\Misiv\StructType\TypeCotitulaire $cotitulaire = null)
    {
        $this->Cotitulaire = $cotitulaire;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\Cotitulaires
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
