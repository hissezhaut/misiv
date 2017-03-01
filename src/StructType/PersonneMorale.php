<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonneMorale StructType
 * @subpackage Structs
 */
class PersonneMorale extends AbstractStructBase
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
     * The SocieteCommerciale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $SocieteCommerciale;
    /**
     * The SIREN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - length: 9
     * - pattern: [0-9]{9}
     * @var string
     */
    public $SIREN;
    /**
     * Constructor method for PersonneMorale
     * @uses PersonneMorale::setRaisonSociale()
     * @uses PersonneMorale::setSocieteCommerciale()
     * @uses PersonneMorale::setSIREN()
     * @param string $raisonSociale
     * @param boolean $societeCommerciale
     * @param string $sIREN
     */
    public function __construct($raisonSociale = null, $societeCommerciale = null, $sIREN = null)
    {
        $this
            ->setRaisonSociale($raisonSociale)
            ->setSocieteCommerciale($societeCommerciale)
            ->setSIREN($sIREN);
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
     * @return \Misiv\StructType\PersonneMorale
     */
    public function setRaisonSociale($raisonSociale = null)
    {
        $this->RaisonSociale = $raisonSociale;
        return $this;
    }
    /**
     * Get SocieteCommerciale value
     * @return boolean
     */
    public function getSocieteCommerciale()
    {
        return $this->SocieteCommerciale;
    }
    /**
     * Set SocieteCommerciale value
     * @param boolean $societeCommerciale
     * @return \Misiv\StructType\PersonneMorale
     */
    public function setSocieteCommerciale($societeCommerciale = null)
    {
        $this->SocieteCommerciale = $societeCommerciale;
        return $this;
    }
    /**
     * Get SIREN value
     * @return string|null
     */
    public function getSIREN()
    {
        return $this->SIREN;
    }
    /**
     * Set SIREN value
     * @param string $sIREN
     * @return \Misiv\StructType\PersonneMorale
     */
    public function setSIREN($sIREN = null)
    {
        $this->SIREN = $sIREN;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\PersonneMorale
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
