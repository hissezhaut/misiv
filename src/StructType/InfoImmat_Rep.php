<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InfoImmat_Rep StructType
 * @subpackage Structs
 */
class InfoImmat_Rep extends AbstractStructBase
{
    /**
     * The InfoVehicule
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\InfoImmat
     */
    public $InfoVehicule;
    /**
     * The Erreur
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Erreur;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Code;
    /**
     * Constructor method for InfoImmat_Rep
     * @uses InfoImmat_Rep::setInfoVehicule()
     * @uses InfoImmat_Rep::setErreur()
     * @uses InfoImmat_Rep::setCode()
     * @param \Misiv\StructType\InfoImmat $infoVehicule
     * @param string $erreur
     * @param int $code
     */
    public function __construct(\Misiv\StructType\InfoImmat $infoVehicule = null, $erreur = null, $code = null)
    {
        $this
            ->setInfoVehicule($infoVehicule)
            ->setErreur($erreur)
            ->setCode($code);
    }
    /**
     * Get InfoVehicule value
     * @return \Misiv\StructType\InfoImmat
     */
    public function getInfoVehicule()
    {
        return $this->InfoVehicule;
    }
    /**
     * Set InfoVehicule value
     * @param \Misiv\StructType\InfoImmat $infoVehicule
     * @return \Misiv\StructType\InfoImmat_Rep
     */
    public function setInfoVehicule(\Misiv\StructType\InfoImmat $infoVehicule = null)
    {
        $this->InfoVehicule = $infoVehicule;
        return $this;
    }
    /**
     * Get Erreur value
     * @return string
     */
    public function getErreur()
    {
        return $this->Erreur;
    }
    /**
     * Set Erreur value
     * @param string $erreur
     * @return \Misiv\StructType\InfoImmat_Rep
     */
    public function setErreur($erreur = null)
    {
        $this->Erreur = $erreur;
        return $this;
    }
    /**
     * Get Code value
     * @return int|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Misiv\StructType\InfoImmat_Rep
     */
    public function setCode($code = null)
    {
        $this->Code = $code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\InfoImmat_Rep
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
