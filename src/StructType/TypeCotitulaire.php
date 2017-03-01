<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeCotitulaire StructType
 * @subpackage Structs
 */
class TypeCotitulaire extends AbstractStructBase
{
    /**
     * The PremierCotitulaire
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $PremierCotitulaire;
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
     * Constructor method for TypeCotitulaire
     * @uses TypeCotitulaire::setPremierCotitulaire()
     * @uses TypeCotitulaire::setPersonneMorale()
     * @uses TypeCotitulaire::setPersonnePhysique()
     * @param boolean $premierCotitulaire
     * @param \Misiv\StructType\PersonneMorale $personneMorale
     * @param \Misiv\StructType\PersonnePhysique $personnePhysique
     */
    public function __construct($premierCotitulaire = null, \Misiv\StructType\PersonneMorale $personneMorale = null, \Misiv\StructType\PersonnePhysique $personnePhysique = null)
    {
        $this
            ->setPremierCotitulaire($premierCotitulaire)
            ->setPersonneMorale($personneMorale)
            ->setPersonnePhysique($personnePhysique);
    }
    /**
     * Get PremierCotitulaire value
     * @return boolean
     */
    public function getPremierCotitulaire()
    {
        return $this->PremierCotitulaire;
    }
    /**
     * Set PremierCotitulaire value
     * @param boolean $premierCotitulaire
     * @return \Misiv\StructType\TypeCotitulaire
     */
    public function setPremierCotitulaire($premierCotitulaire = null)
    {
        $this->PremierCotitulaire = $premierCotitulaire;
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
     * @return \Misiv\StructType\TypeCotitulaire
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
     * @return \Misiv\StructType\TypeCotitulaire
     */
    public function setPersonnePhysique(\Misiv\StructType\PersonnePhysique $personnePhysique = null)
    {
        $this->PersonnePhysique = $personnePhysique;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\TypeCotitulaire
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
