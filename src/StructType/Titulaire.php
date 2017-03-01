<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Titulaire StructType
 * @subpackage Structs
 */
class Titulaire extends AbstractStructBase
{
    /**
     * The NomPrenom
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $NomPrenom;
    /**
     * The RaisonSociale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RaisonSociale;
    /**
     * The AgrementVHU
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AgrementVHU;
    /**
     * The PersonneMorale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\PersonneMorale
     */
    public $PersonneMorale;
    /**
     * The DroitOpposition
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $DroitOpposition;
    /**
     * Constructor method for Titulaire
     * @uses Titulaire::setNomPrenom()
     * @uses Titulaire::setRaisonSociale()
     * @uses Titulaire::setAgrementVHU()
     * @uses Titulaire::setPersonneMorale()
     * @uses Titulaire::setDroitOpposition()
     * @param string $nomPrenom
     * @param string $raisonSociale
     * @param string $agrementVHU
     * @param \Misiv\StructType\PersonneMorale $personneMorale
     * @param boolean $droitOpposition
     */
    public function __construct($nomPrenom = null, $raisonSociale = null, $agrementVHU = null, \Misiv\StructType\PersonneMorale $personneMorale = null, $droitOpposition = null)
    {
        $this
            ->setNomPrenom($nomPrenom)
            ->setRaisonSociale($raisonSociale)
            ->setAgrementVHU($agrementVHU)
            ->setPersonneMorale($personneMorale)
            ->setDroitOpposition($droitOpposition);
    }
    /**
     * Get NomPrenom value
     * @return string
     */
    public function getNomPrenom()
    {
        return $this->NomPrenom;
    }
    /**
     * Set NomPrenom value
     * @param string $nomPrenom
     * @return \Misiv\StructType\Titulaire
     */
    public function setNomPrenom($nomPrenom = null)
    {
        $this->NomPrenom = $nomPrenom;
        return $this;
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
     * @return \Misiv\StructType\Titulaire
     */
    public function setRaisonSociale($raisonSociale = null)
    {
        $this->RaisonSociale = $raisonSociale;
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
     * @return \Misiv\StructType\Titulaire
     */
    public function setAgrementVHU($agrementVHU = null)
    {
        $this->AgrementVHU = $agrementVHU;
        return $this;
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
     * @return \Misiv\StructType\Titulaire
     */
    public function setPersonneMorale(\Misiv\StructType\PersonneMorale $personneMorale = null)
    {
        $this->PersonneMorale = $personneMorale;
        return $this;
    }
    /**
     * Get DroitOpposition value
     * @return boolean|null
     */
    public function getDroitOpposition()
    {
        return $this->DroitOpposition;
    }
    /**
     * Set DroitOpposition value
     * @param boolean $droitOpposition
     * @return \Misiv\StructType\Titulaire
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
     * @return \Misiv\StructType\Titulaire
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
