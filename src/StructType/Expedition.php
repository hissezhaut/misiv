<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Expedition StructType
 * @subpackage Structs
 */
class Expedition extends AbstractStructBase
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
     * The SIRET
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - length: 9
     * - pattern: [0-9]{9}
     * @var string
     */
    public $SIRET;
    /**
     * The Adresse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeAdresse
     */
    public $Adresse;
    /**
     * The DroitOpposition
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $DroitOpposition;
    /**
     * Constructor method for Expedition
     * @uses Expedition::setRaisonSociale()
     * @uses Expedition::setSIRET()
     * @uses Expedition::setAdresse()
     * @uses Expedition::setDroitOpposition()
     * @param string $raisonSociale
     * @param string $sIRET
     * @param \Misiv\StructType\TypeAdresse $adresse
     * @param boolean $droitOpposition
     */
    public function __construct($raisonSociale = null, $sIRET = null, \Misiv\StructType\TypeAdresse $adresse = null, $droitOpposition = null)
    {
        $this
            ->setRaisonSociale($raisonSociale)
            ->setSIRET($sIRET)
            ->setAdresse($adresse)
            ->setDroitOpposition($droitOpposition);
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
     * @return \Misiv\StructType\Expedition
     */
    public function setRaisonSociale($raisonSociale = null)
    {
        $this->RaisonSociale = $raisonSociale;
        return $this;
    }
    /**
     * Get SIRET value
     * @return string
     */
    public function getSIRET()
    {
        return $this->SIRET;
    }
    /**
     * Set SIRET value
     * @param string $sIRET
     * @return \Misiv\StructType\Expedition
     */
    public function setSIRET($sIRET = null)
    {
        $this->SIRET = $sIRET;
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
     * @return \Misiv\StructType\Expedition
     */
    public function setAdresse(\Misiv\StructType\TypeAdresse $adresse = null)
    {
        $this->Adresse = $adresse;
        return $this;
    }
    /**
     * Get DroitOpposition value
     * @return boolean
     */
    public function getDroitOpposition()
    {
        return $this->DroitOpposition;
    }
    /**
     * Set DroitOpposition value
     * @param boolean $droitOpposition
     * @return \Misiv\StructType\Expedition
     */
    public function setDroitOpposition($droitOpposition = null)
    {
        $this->DroitOpposition = $droitOpposition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\Expedition
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
