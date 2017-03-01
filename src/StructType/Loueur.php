<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Loueur StructType
 * @subpackage Structs
 */
class Loueur extends AbstractStructBase
{
    /**
     * The RaisonSociale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RaisonSociale;
    /**
     * The SIREN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SIREN;
    /**
     * The Adresse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeAdresse
     */
    public $Adresse;
    /**
     * Constructor method for Loueur
     * @uses Loueur::setRaisonSociale()
     * @uses Loueur::setSIREN()
     * @uses Loueur::setAdresse()
     * @param string $raisonSociale
     * @param string $sIREN
     * @param \Misiv\StructType\TypeAdresse $adresse
     */
    public function __construct($raisonSociale = null, $sIREN = null, \Misiv\StructType\TypeAdresse $adresse = null)
    {
        $this
            ->setRaisonSociale($raisonSociale)
            ->setSIREN($sIREN)
            ->setAdresse($adresse);
    }
    /**
     * Get RaisonSociale value
     * @return string
     */
    public function getRaisonSociale()
    {
        return $this->RaisonSociale;
    }
    /**
     * Set RaisonSociale value
     * @param string $raisonSociale
     * @return \Misiv\StructType\Loueur
     */
    public function setRaisonSociale($raisonSociale = null)
    {
        $this->RaisonSociale = $raisonSociale;
        return $this;
    }
    /**
     * Get SIREN value
     * @return string
     */
    public function getSIREN()
    {
        return $this->SIREN;
    }
    /**
     * Set SIREN value
     * @param string $sIREN
     * @return \Misiv\StructType\Loueur
     */
    public function setSIREN($sIREN = null)
    {
        $this->SIREN = $sIREN;
        return $this;
    }
    /**
     * Get Adresse value
     * @return \Misiv\StructType\TypeAdresse
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }
    /**
     * Set Adresse value
     * @param \Misiv\StructType\TypeAdresse $adresse
     * @return \Misiv\StructType\Loueur
     */
    public function setAdresse(\Misiv\StructType\TypeAdresse $adresse = null)
    {
        $this->Adresse = $adresse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\Loueur
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
