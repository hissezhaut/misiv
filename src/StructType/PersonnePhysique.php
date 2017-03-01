<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonnePhysique StructType
 * @subpackage Structs
 */
class PersonnePhysique extends AbstractStructBase
{
    /**
     * The Nom
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Nom;
    /**
     * The Prenom
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Prenom;
    /**
     * The Sexe
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Sexe;
    /**
     * The DateNaissance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 19
     * - pattern: [0-9]{2}/[0-9]{2}/[0-9]{4}(\s([01][0-9]|2[0123])(:[0-5][0-9]){1,2})?
     * @var string
     */
    public $DateNaissance;
    /**
     * The LieuNaissance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $LieuNaissance;
    /**
     * The DepNaissance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DepNaissance;
    /**
     * The PaysNaissance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PaysNaissance;
    /**
     * The NomUsage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NomUsage;
    /**
     * Constructor method for PersonnePhysique
     * @uses PersonnePhysique::setNom()
     * @uses PersonnePhysique::setPrenom()
     * @uses PersonnePhysique::setSexe()
     * @uses PersonnePhysique::setDateNaissance()
     * @uses PersonnePhysique::setLieuNaissance()
     * @uses PersonnePhysique::setDepNaissance()
     * @uses PersonnePhysique::setPaysNaissance()
     * @uses PersonnePhysique::setNomUsage()
     * @param string $nom
     * @param string $prenom
     * @param string $sexe
     * @param string $dateNaissance
     * @param string $lieuNaissance
     * @param string $depNaissance
     * @param string $paysNaissance
     * @param string $nomUsage
     */
    public function __construct($nom = null, $prenom = null, $sexe = null, $dateNaissance = null, $lieuNaissance = null, $depNaissance = null, $paysNaissance = null, $nomUsage = null)
    {
        $this
            ->setNom($nom)
            ->setPrenom($prenom)
            ->setSexe($sexe)
            ->setDateNaissance($dateNaissance)
            ->setLieuNaissance($lieuNaissance)
            ->setDepNaissance($depNaissance)
            ->setPaysNaissance($paysNaissance)
            ->setNomUsage($nomUsage);
    }
    /**
     * Get Nom value
     * @return string
     */
    public function getNom()
    {
        return $this->Nom;
    }
    /**
     * Set Nom value
     * @param string $nom
     * @return \Misiv\StructType\PersonnePhysique
     */
    public function setNom($nom = null)
    {
        $this->Nom = $nom;
        return $this;
    }
    /**
     * Get Prenom value
     * @return string
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }
    /**
     * Set Prenom value
     * @param string $prenom
     * @return \Misiv\StructType\PersonnePhysique
     */
    public function setPrenom($prenom = null)
    {
        $this->Prenom = $prenom;
        return $this;
    }
    /**
     * Get Sexe value
     * @return string
     */
    public function getSexe()
    {
        return $this->Sexe;
    }
    /**
     * Set Sexe value
     * @uses \Misiv\EnumType\Sexe::valueIsValid()
     * @uses \Misiv\EnumType\Sexe::getValidValues()
     * @param string $sexe
     * @return \Misiv\StructType\PersonnePhysique
     */
    public function setSexe($sexe = null)
    {
        if (!\Misiv\EnumType\Sexe::valueIsValid($sexe)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sexe, implode(', ', \Misiv\EnumType\Sexe::getValidValues())), __LINE__);
        }
        $this->Sexe = $sexe;
        return $this;
    }
    /**
     * Get DateNaissance value
     * @return string
     */
    public function getDateNaissance()
    {
        return $this->DateNaissance;
    }
    /**
     * Set DateNaissance value
     * @param string $dateNaissance
     * @return \Misiv\StructType\PersonnePhysique
     */
    public function setDateNaissance($dateNaissance = null)
    {
        $this->DateNaissance = $dateNaissance;
        return $this;
    }
    /**
     * Get LieuNaissance value
     * @return string
     */
    public function getLieuNaissance()
    {
        return $this->LieuNaissance;
    }
    /**
     * Set LieuNaissance value
     * @param string $lieuNaissance
     * @return \Misiv\StructType\PersonnePhysique
     */
    public function setLieuNaissance($lieuNaissance = null)
    {
        $this->LieuNaissance = $lieuNaissance;
        return $this;
    }
    /**
     * Get DepNaissance value
     * @return string
     */
    public function getDepNaissance()
    {
        return $this->DepNaissance;
    }
    /**
     * Set DepNaissance value
     * @param string $depNaissance
     * @return \Misiv\StructType\PersonnePhysique
     */
    public function setDepNaissance($depNaissance = null)
    {
        $this->DepNaissance = $depNaissance;
        return $this;
    }
    /**
     * Get PaysNaissance value
     * @return string
     */
    public function getPaysNaissance()
    {
        return $this->PaysNaissance;
    }
    /**
     * Set PaysNaissance value
     * @param string $paysNaissance
     * @return \Misiv\StructType\PersonnePhysique
     */
    public function setPaysNaissance($paysNaissance = null)
    {
        $this->PaysNaissance = $paysNaissance;
        return $this;
    }
    /**
     * Get NomUsage value
     * @return string|null
     */
    public function getNomUsage()
    {
        return $this->NomUsage;
    }
    /**
     * Set NomUsage value
     * @param string $nomUsage
     * @return \Misiv\StructType\PersonnePhysique
     */
    public function setNomUsage($nomUsage = null)
    {
        $this->NomUsage = $nomUsage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\PersonnePhysique
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
