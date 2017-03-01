<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeCTVO StructType
 * @subpackage Structs
 */
class TypeCTVO extends AbstractStructBase
{
    /**
     * The TypeDemarche
     * Meta informations extracted from the WSDL
     * - fixed: CTVO
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TypeDemarche;
    /**
     * The DateDemarche
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 19
     * - pattern: [0-9]{2}/[0-9]{2}/[0-9]{4}(\s([01][0-9]|2[0123])(:[0-5][0-9]){1,2})?
     * @var string
     */
    public $DateDemarche;
    /**
     * The Titulaire
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\Titulaire
     */
    public $Titulaire;
    /**
     * The Acquereur
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\Acquereur
     */
    public $Acquereur;
    /**
     * The NbCotitulaires
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $NbCotitulaires;
    /**
     * The Vehicule
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\Vehicule
     */
    public $Vehicule;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ID;
    /**
     * The PaiementCBClient
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $PaiementCBClient;
    /**
     * The NumPortable
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NumPortable;
    /**
     * The EmissionBO
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $EmissionBO;
    /**
     * The Cotitulaires
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Misiv\StructType\Cotitulaires
     */
    public $Cotitulaires;
    /**
     * The Reponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Misiv\StructType\Reponse
     */
    public $Reponse;
    /**
     * Constructor method for TypeCTVO
     * @uses TypeCTVO::setTypeDemarche()
     * @uses TypeCTVO::setDateDemarche()
     * @uses TypeCTVO::setTitulaire()
     * @uses TypeCTVO::setAcquereur()
     * @uses TypeCTVO::setNbCotitulaires()
     * @uses TypeCTVO::setVehicule()
     * @uses TypeCTVO::setID()
     * @uses TypeCTVO::setPaiementCBClient()
     * @uses TypeCTVO::setNumPortable()
     * @uses TypeCTVO::setEmissionBO()
     * @uses TypeCTVO::setCotitulaires()
     * @uses TypeCTVO::setReponse()
     * @param string $typeDemarche
     * @param string $dateDemarche
     * @param \Misiv\StructType\Titulaire $titulaire
     * @param \Misiv\StructType\Acquereur $acquereur
     * @param int $nbCotitulaires
     * @param \Misiv\StructType\Vehicule $vehicule
     * @param int $iD
     * @param boolean $paiementCBClient
     * @param string $numPortable
     * @param boolean $emissionBO
     * @param \Misiv\StructType\Cotitulaires $cotitulaires
     * @param \Misiv\StructType\Reponse $reponse
     */
    public function __construct($typeDemarche = null, $dateDemarche = null, \Misiv\StructType\Titulaire $titulaire = null, \Misiv\StructType\Acquereur $acquereur = null, $nbCotitulaires = null, \Misiv\StructType\Vehicule $vehicule = null, $iD = null, $paiementCBClient = null, $numPortable = null, $emissionBO = null, \Misiv\StructType\Cotitulaires $cotitulaires = null, \Misiv\StructType\Reponse $reponse = null)
    {
        $this
            ->setTypeDemarche($typeDemarche)
            ->setDateDemarche($dateDemarche)
            ->setTitulaire($titulaire)
            ->setAcquereur($acquereur)
            ->setNbCotitulaires($nbCotitulaires)
            ->setVehicule($vehicule)
            ->setID($iD)
            ->setPaiementCBClient($paiementCBClient)
            ->setNumPortable($numPortable)
            ->setEmissionBO($emissionBO)
            ->setCotitulaires($cotitulaires)
            ->setReponse($reponse);
    }
    /**
     * Get TypeDemarche value
     * @return string
     */
    public function getTypeDemarche()
    {
        return $this->TypeDemarche;
    }
    /**
     * Set TypeDemarche value
     * @param string $typeDemarche
     * @return \Misiv\StructType\TypeCTVO
     */
    public function setTypeDemarche($typeDemarche = null)
    {
        $this->TypeDemarche = $typeDemarche;
        return $this;
    }
    /**
     * Get DateDemarche value
     * @return string
     */
    public function getDateDemarche()
    {
        return $this->DateDemarche;
    }
    /**
     * Set DateDemarche value
     * @param string $dateDemarche
     * @return \Misiv\StructType\TypeCTVO
     */
    public function setDateDemarche($dateDemarche = null)
    {
        $this->DateDemarche = $dateDemarche;
        return $this;
    }
    /**
     * Get Titulaire value
     * @return \Misiv\StructType\Titulaire
     */
    public function getTitulaire()
    {
        return $this->Titulaire;
    }
    /**
     * Set Titulaire value
     * @param \Misiv\StructType\Titulaire $titulaire
     * @return \Misiv\StructType\TypeCTVO
     */
    public function setTitulaire(\Misiv\StructType\Titulaire $titulaire = null)
    {
        $this->Titulaire = $titulaire;
        return $this;
    }
    /**
     * Get Acquereur value
     * @return \Misiv\StructType\Acquereur
     */
    public function getAcquereur()
    {
        return $this->Acquereur;
    }
    /**
     * Set Acquereur value
     * @param \Misiv\StructType\Acquereur $acquereur
     * @return \Misiv\StructType\TypeCTVO
     */
    public function setAcquereur(\Misiv\StructType\Acquereur $acquereur = null)
    {
        $this->Acquereur = $acquereur;
        return $this;
    }
    /**
     * Get NbCotitulaires value
     * @return int
     */
    public function getNbCotitulaires()
    {
        return $this->NbCotitulaires;
    }
    /**
     * Set NbCotitulaires value
     * @param int $nbCotitulaires
     * @return \Misiv\StructType\TypeCTVO
     */
    public function setNbCotitulaires($nbCotitulaires = null)
    {
        $this->NbCotitulaires = $nbCotitulaires;
        return $this;
    }
    /**
     * Get Vehicule value
     * @return \Misiv\StructType\Vehicule
     */
    public function getVehicule()
    {
        return $this->Vehicule;
    }
    /**
     * Set Vehicule value
     * @param \Misiv\StructType\Vehicule $vehicule
     * @return \Misiv\StructType\TypeCTVO
     */
    public function setVehicule(\Misiv\StructType\Vehicule $vehicule = null)
    {
        $this->Vehicule = $vehicule;
        return $this;
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \Misiv\StructType\TypeCTVO
     */
    public function setID($iD = null)
    {
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get PaiementCBClient value
     * @return boolean|null
     */
    public function getPaiementCBClient()
    {
        return $this->PaiementCBClient;
    }
    /**
     * Set PaiementCBClient value
     * @param boolean $paiementCBClient
     * @return \Misiv\StructType\TypeCTVO
     */
    public function setPaiementCBClient($paiementCBClient = null)
    {
        $this->PaiementCBClient = $paiementCBClient;
        return $this;
    }
    /**
     * Get NumPortable value
     * @return string|null
     */
    public function getNumPortable()
    {
        return $this->NumPortable;
    }
    /**
     * Set NumPortable value
     * @param string $numPortable
     * @return \Misiv\StructType\TypeCTVO
     */
    public function setNumPortable($numPortable = null)
    {
        $this->NumPortable = $numPortable;
        return $this;
    }
    /**
     * Get EmissionBO value
     * @return boolean|null
     */
    public function getEmissionBO()
    {
        return $this->EmissionBO;
    }
    /**
     * Set EmissionBO value
     * @param boolean $emissionBO
     * @return \Misiv\StructType\TypeCTVO
     */
    public function setEmissionBO($emissionBO = null)
    {
        $this->EmissionBO = $emissionBO;
        return $this;
    }
    /**
     * Get Cotitulaires value
     * @return \Misiv\StructType\Cotitulaires|null
     */
    public function getCotitulaires()
    {
        return $this->Cotitulaires;
    }
    /**
     * Set Cotitulaires value
     * @param \Misiv\StructType\Cotitulaires $cotitulaires
     * @return \Misiv\StructType\TypeCTVO
     */
    public function setCotitulaires(\Misiv\StructType\Cotitulaires $cotitulaires = null)
    {
        $this->Cotitulaires = $cotitulaires;
        return $this;
    }
    /**
     * Get Reponse value
     * @return \Misiv\StructType\Reponse|null
     */
    public function getReponse()
    {
        return $this->Reponse;
    }
    /**
     * Set Reponse value
     * @param \Misiv\StructType\Reponse $reponse
     * @return \Misiv\StructType\TypeCTVO
     */
    public function setReponse(\Misiv\StructType\Reponse $reponse = null)
    {
        $this->Reponse = $reponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\TypeCTVO
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
