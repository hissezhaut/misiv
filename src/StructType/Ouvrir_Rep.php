<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ouvrir_Rep StructType
 * @subpackage Structs
 */
class Ouvrir_Rep extends AbstractStructBase
{
    /**
     * The Demarche
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeDemarche
     */
    public $Demarche;
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
     * Constructor method for Ouvrir_Rep
     * @uses Ouvrir_Rep::setDemarche()
     * @uses Ouvrir_Rep::setErreur()
     * @uses Ouvrir_Rep::setCode()
     * @param \Misiv\StructType\TypeDemarche $demarche
     * @param string $erreur
     * @param int $code
     */
    public function __construct(\Misiv\StructType\TypeDemarche $demarche = null, $erreur = null, $code = null)
    {
        $this
            ->setDemarche($demarche)
            ->setErreur($erreur)
            ->setCode($code);
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
     * @return \Misiv\StructType\Ouvrir_Rep
     */
    public function setDemarche(\Misiv\StructType\TypeDemarche $demarche = null)
    {
        $this->Demarche = $demarche;
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
     * @return \Misiv\StructType\Ouvrir_Rep
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
     * @return \Misiv\StructType\Ouvrir_Rep
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
     * @return \Misiv\StructType\Ouvrir_Rep
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
