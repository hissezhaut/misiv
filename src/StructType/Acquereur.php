<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Acquereur StructType
 * @subpackage Structs
 */
class Acquereur extends AbstractStructBase
{
    /**
     * The PersonneMorale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\PersonneMorale
     */
    public $PersonneMorale;
    /**
     * The PersonnePhysique
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\PersonnePhysique
     */
    public $PersonnePhysique;
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
     * The AgrementVHU
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AgrementVHU;
    /**
     * Constructor method for Acquereur
     * @uses Acquereur::setPersonneMorale()
     * @uses Acquereur::setPersonnePhysique()
     * @uses Acquereur::setAdresse()
     * @uses Acquereur::setDroitOpposition()
     * @uses Acquereur::setAgrementVHU()
     * @param \Misiv\StructType\PersonneMorale $personneMorale
     * @param \Misiv\StructType\PersonnePhysique $personnePhysique
     * @param \Misiv\StructType\TypeAdresse $adresse
     * @param boolean $droitOpposition
     * @param string $agrementVHU
     */
    public function __construct(\Misiv\StructType\PersonneMorale $personneMorale = null, \Misiv\StructType\PersonnePhysique $personnePhysique = null, \Misiv\StructType\TypeAdresse $adresse = null, $droitOpposition = null, $agrementVHU = null)
    {
        $this
            ->setPersonneMorale($personneMorale)
            ->setPersonnePhysique($personnePhysique)
            ->setAdresse($adresse)
            ->setDroitOpposition($droitOpposition)
            ->setAgrementVHU($agrementVHU);
    }
    /**
     * Get PersonneMorale value
     * @return \Misiv\StructType\PersonneMorale
     */
    public function getPersonneMorale()
    {
        return $this->PersonneMorale;
    }
    /**
     * Set PersonneMorale value
     * @param \Misiv\StructType\PersonneMorale $personneMorale
     * @return \Misiv\StructType\Acquereur
     */
    public function setPersonneMorale(\Misiv\StructType\PersonneMorale $personneMorale = null)
    {
        $this->PersonneMorale = $personneMorale;
        return $this;
    }
    /**
     * Get PersonnePhysique value
     * @return \Misiv\StructType\PersonnePhysique
     */
    public function getPersonnePhysique()
    {
        return $this->PersonnePhysique;
    }
    /**
     * Set PersonnePhysique value
     * @param \Misiv\StructType\PersonnePhysique $personnePhysique
     * @return \Misiv\StructType\Acquereur
     */
    public function setPersonnePhysique(\Misiv\StructType\PersonnePhysique $personnePhysique = null)
    {
        $this->PersonnePhysique = $personnePhysique;
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
     * @return \Misiv\StructType\Acquereur
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
     * @return \Misiv\StructType\Acquereur
     */
    public function setDroitOpposition($droitOpposition = null)
    {
        $this->DroitOpposition = $droitOpposition;
        return $this;
    }
    /**
     * Get AgrementVHU value
     * @return string
     */
    public function getAgrementVHU()
    {
        return $this->AgrementVHU;
    }
    /**
     * Set AgrementVHU value
     * @param string $agrementVHU
     * @return \Misiv\StructType\Acquereur
     */
    public function setAgrementVHU($agrementVHU = null)
    {
        $this->AgrementVHU = $agrementVHU;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\Acquereur
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
