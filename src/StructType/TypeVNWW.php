<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeVNWW StructType
 * @subpackage Structs
 */
class TypeVNWW extends AbstractStructBase
{
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ID;
    /**
     * The TypeDemarche
     * Meta informations extracted from the WSDL
     * - fixed: VNWW
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TypeDemarche;
    /**
     * The Acquereur
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\Acquereur
     */
    public $Acquereur;
    /**
     * The Vehicule
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeVN
     */
    public $Vehicule;
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
     * The DateDemarche
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 19
     * - pattern: [0-9]{2}/[0-9]{2}/[0-9]{4}(\s([01][0-9]|2[0123])(:[0-5][0-9]){1,2})?
     * @var string
     */
    public $DateDemarche;
    /**
     * The NbCotitulaires
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NbCotitulaires;
    /**
     * The Cotitulaires
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Misiv\StructType\Cotitulaires
     */
    public $Cotitulaires;
    /**
     * The Carrossier
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Misiv\StructType\TypeCarrossier
     */
    public $Carrossier;
    /**
     * The Reponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Misiv\StructType\Reponse
     */
    public $Reponse;
    /**
     * Constructor method for TypeVNWW
     * @uses TypeVNWW::setID()
     * @uses TypeVNWW::setTypeDemarche()
     * @uses TypeVNWW::setAcquereur()
     * @uses TypeVNWW::setVehicule()
     * @uses TypeVNWW::setPaiementCBClient()
     * @uses TypeVNWW::setNumPortable()
     * @uses TypeVNWW::setEmissionBO()
     * @uses TypeVNWW::setDateDemarche()
     * @uses TypeVNWW::setNbCotitulaires()
     * @uses TypeVNWW::setCotitulaires()
     * @uses TypeVNWW::setCarrossier()
     * @uses TypeVNWW::setReponse()
     * @param int $iD
     * @param string $typeDemarche
     * @param \Misiv\StructType\Acquereur $acquereur
     * @param \Misiv\StructType\TypeVN $vehicule
     * @param boolean $paiementCBClient
     * @param string $numPortable
     * @param boolean $emissionBO
     * @param string $dateDemarche
     * @param int $nbCotitulaires
     * @param \Misiv\StructType\Cotitulaires $cotitulaires
     * @param \Misiv\StructType\TypeCarrossier $carrossier
     * @param \Misiv\StructType\Reponse $reponse
     */
    public function __construct($iD = null, $typeDemarche = null, \Misiv\StructType\Acquereur $acquereur = null, \Misiv\StructType\TypeVN $vehicule = null, $paiementCBClient = null, $numPortable = null, $emissionBO = null, $dateDemarche = null, $nbCotitulaires = null, \Misiv\StructType\Cotitulaires $cotitulaires = null, \Misiv\StructType\TypeCarrossier $carrossier = null, \Misiv\StructType\Reponse $reponse = null)
    {
        $this
            ->setID($iD)
            ->setTypeDemarche($typeDemarche)
            ->setAcquereur($acquereur)
            ->setVehicule($vehicule)
            ->setPaiementCBClient($paiementCBClient)
            ->setNumPortable($numPortable)
            ->setEmissionBO($emissionBO)
            ->setDateDemarche($dateDemarche)
            ->setNbCotitulaires($nbCotitulaires)
            ->setCotitulaires($cotitulaires)
            ->setCarrossier($carrossier)
            ->setReponse($reponse);
    }
    /**
     * Get ID value
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \Misiv\StructType\TypeVNWW
     */
    public function setID($iD = null)
    {
        $this->ID = $iD;
        return $this;
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
     * @return \Misiv\StructType\TypeVNWW
     */
    public function setTypeDemarche($typeDemarche = null)
    {
        $this->TypeDemarche = $typeDemarche;
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
     * @return \Misiv\StructType\TypeVNWW
     */
    public function setAcquereur(\Misiv\StructType\Acquereur $acquereur = null)
    {
        $this->Acquereur = $acquereur;
        return $this;
    }
    /**
     * Get Vehicule value
     * @return \Misiv\StructType\TypeVN
     */
    public function getVehicule()
    {
        return $this->Vehicule;
    }
    /**
     * Set Vehicule value
     * @param \Misiv\StructType\TypeVN $vehicule
     * @return \Misiv\StructType\TypeVNWW
     */
    public function setVehicule(\Misiv\StructType\TypeVN $vehicule = null)
    {
        $this->Vehicule = $vehicule;
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
     * @return \Misiv\StructType\TypeVNWW
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
     * @return \Misiv\StructType\TypeVNWW
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
     * @return \Misiv\StructType\TypeVNWW
     */
    public function setEmissionBO($emissionBO = null)
    {
        $this->EmissionBO = $emissionBO;
        return $this;
    }
    /**
     * Get DateDemarche value
     * @return string|null
     */
    public function getDateDemarche()
    {
        return $this->DateDemarche;
    }
    /**
     * Set DateDemarche value
     * @param string $dateDemarche
     * @return \Misiv\StructType\TypeVNWW
     */
    public function setDateDemarche($dateDemarche = null)
    {
        $this->DateDemarche = $dateDemarche;
        return $this;
    }
    /**
     * Get NbCotitulaires value
     * @return int|null
     */
    public function getNbCotitulaires()
    {
        return $this->NbCotitulaires;
    }
    /**
     * Set NbCotitulaires value
     * @param int $nbCotitulaires
     * @return \Misiv\StructType\TypeVNWW
     */
    public function setNbCotitulaires($nbCotitulaires = null)
    {
        $this->NbCotitulaires = $nbCotitulaires;
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
     * @return \Misiv\StructType\TypeVNWW
     */
    public function setCotitulaires(\Misiv\StructType\Cotitulaires $cotitulaires = null)
    {
        $this->Cotitulaires = $cotitulaires;
        return $this;
    }
    /**
     * Get Carrossier value
     * @return \Misiv\StructType\TypeCarrossier|null
     */
    public function getCarrossier()
    {
        return $this->Carrossier;
    }
    /**
     * Set Carrossier value
     * @param \Misiv\StructType\TypeCarrossier $carrossier
     * @return \Misiv\StructType\TypeVNWW
     */
    public function setCarrossier(\Misiv\StructType\TypeCarrossier $carrossier = null)
    {
        $this->Carrossier = $carrossier;
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
     * @return \Misiv\StructType\TypeVNWW
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
     * @return \Misiv\StructType\TypeVNWW
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
