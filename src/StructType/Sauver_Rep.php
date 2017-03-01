<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sauver_Rep StructType
 * @subpackage Structs
 */
class Sauver_Rep extends AbstractStructBase
{
    /**
     * The Erreur
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Erreur;
    /**
     * The Lot
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Misiv\StructType\Lot
     */
    public $Lot;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Code;
    /**
     * Constructor method for Sauver_Rep
     * @uses Sauver_Rep::setErreur()
     * @uses Sauver_Rep::setLot()
     * @uses Sauver_Rep::setCode()
     * @param string $erreur
     * @param \Misiv\StructType\Lot $lot
     * @param int $code
     */
    public function __construct($erreur = null, \Misiv\StructType\Lot $lot = null, $code = null)
    {
        $this
            ->setErreur($erreur)
            ->setLot($lot)
            ->setCode($code);
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
     * @return \Misiv\StructType\Sauver_Rep
     */
    public function setErreur($erreur = null)
    {
        $this->Erreur = $erreur;
        return $this;
    }
    /**
     * Get Lot value
     * @return \Misiv\StructType\Lot|null
     */
    public function getLot()
    {
        return $this->Lot;
    }
    /**
     * Set Lot value
     * @param \Misiv\StructType\Lot $lot
     * @return \Misiv\StructType\Sauver_Rep
     */
    public function setLot(\Misiv\StructType\Lot $lot = null)
    {
        $this->Lot = $lot;
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
     * @return \Misiv\StructType\Sauver_Rep
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
     * @return \Misiv\StructType\Sauver_Rep
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
