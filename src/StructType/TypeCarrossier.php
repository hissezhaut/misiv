<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeCarrossier StructType
 * @subpackage Structs
 */
class TypeCarrossier extends AbstractStructBase
{
    /**
     * The Agrement
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Agrement;
    /**
     * The RaisonSociale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RaisonSociale;
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
     * The Justificatifs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $Justificatifs;
    /**
     * Constructor method for TypeCarrossier
     * @uses TypeCarrossier::setAgrement()
     * @uses TypeCarrossier::setRaisonSociale()
     * @uses TypeCarrossier::setNom()
     * @uses TypeCarrossier::setPrenom()
     * @uses TypeCarrossier::setJustificatifs()
     * @param string $agrement
     * @param string $raisonSociale
     * @param string $nom
     * @param string $prenom
     * @param boolean $justificatifs
     */
    public function __construct($agrement = null, $raisonSociale = null, $nom = null, $prenom = null, $justificatifs = null)
    {
        $this
            ->setAgrement($agrement)
            ->setRaisonSociale($raisonSociale)
            ->setNom($nom)
            ->setPrenom($prenom)
            ->setJustificatifs($justificatifs);
    }
    /**
     * Get Agrement value
     * @return string
     */
    public function getAgrement()
    {
        return $this->Agrement;
    }
    /**
     * Set Agrement value
     * @param string $agrement
     * @return \Misiv\StructType\TypeCarrossier
     */
    public function setAgrement($agrement = null)
    {
        $this->Agrement = $agrement;
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
     * @return \Misiv\StructType\TypeCarrossier
     */
    public function setRaisonSociale($raisonSociale = null)
    {
        $this->RaisonSociale = $raisonSociale;
        return $this;
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
     * @return \Misiv\StructType\TypeCarrossier
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
     * @return \Misiv\StructType\TypeCarrossier
     */
    public function setPrenom($prenom = null)
    {
        $this->Prenom = $prenom;
        return $this;
    }
    /**
     * Get Justificatifs value
     * @return boolean
     */
    public function getJustificatifs()
    {
        return $this->Justificatifs;
    }
    /**
     * Set Justificatifs value
     * @param boolean $justificatifs
     * @return \Misiv\StructType\TypeCarrossier
     */
    public function setJustificatifs($justificatifs = null)
    {
        $this->Justificatifs = $justificatifs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\TypeCarrossier
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
