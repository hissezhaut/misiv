<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeDIVLN StructType
 * @subpackage Structs
 */
class TypeDIVLN extends AbstractStructBase
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
     * - fixed: DIVLN
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TypeDemarche;
    /**
     * The TypeLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TypeLocation;
    /**
     * The ModeExpedition
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ModeExpedition;
    /**
     * The Acquereur
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\Acquereur
     */
    public $Acquereur;
    /**
     * The Locataire
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\Locataire
     */
    public $Locataire;
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
     * The Loueur
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Misiv\StructType\Loueur
     */
    public $Loueur;
    /**
     * The Expedition
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Misiv\StructType\Expedition
     */
    public $Expedition;
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
     * Constructor method for TypeDIVLN
     * @uses TypeDIVLN::setID()
     * @uses TypeDIVLN::setTypeDemarche()
     * @uses TypeDIVLN::setTypeLocation()
     * @uses TypeDIVLN::setModeExpedition()
     * @uses TypeDIVLN::setAcquereur()
     * @uses TypeDIVLN::setLocataire()
     * @uses TypeDIVLN::setVehicule()
     * @uses TypeDIVLN::setPaiementCBClient()
     * @uses TypeDIVLN::setNumPortable()
     * @uses TypeDIVLN::setEmissionBO()
     * @uses TypeDIVLN::setDateDemarche()
     * @uses TypeDIVLN::setLoueur()
     * @uses TypeDIVLN::setExpedition()
     * @uses TypeDIVLN::setCarrossier()
     * @uses TypeDIVLN::setReponse()
     * @param int $iD
     * @param string $typeDemarche
     * @param string $typeLocation
     * @param string $modeExpedition
     * @param \Misiv\StructType\Acquereur $acquereur
     * @param \Misiv\StructType\Locataire $locataire
     * @param \Misiv\StructType\TypeVN $vehicule
     * @param boolean $paiementCBClient
     * @param string $numPortable
     * @param boolean $emissionBO
     * @param string $dateDemarche
     * @param \Misiv\StructType\Loueur $loueur
     * @param \Misiv\StructType\Expedition $expedition
     * @param \Misiv\StructType\TypeCarrossier $carrossier
     * @param \Misiv\StructType\Reponse $reponse
     */
    public function __construct($iD = null, $typeDemarche = null, $typeLocation = null, $modeExpedition = null, \Misiv\StructType\Acquereur $acquereur = null, \Misiv\StructType\Locataire $locataire = null, \Misiv\StructType\TypeVN $vehicule = null, $paiementCBClient = null, $numPortable = null, $emissionBO = null, $dateDemarche = null, \Misiv\StructType\Loueur $loueur = null, \Misiv\StructType\Expedition $expedition = null, \Misiv\StructType\TypeCarrossier $carrossier = null, \Misiv\StructType\Reponse $reponse = null)
    {
        $this
            ->setID($iD)
            ->setTypeDemarche($typeDemarche)
            ->setTypeLocation($typeLocation)
            ->setModeExpedition($modeExpedition)
            ->setAcquereur($acquereur)
            ->setLocataire($locataire)
            ->setVehicule($vehicule)
            ->setPaiementCBClient($paiementCBClient)
            ->setNumPortable($numPortable)
            ->setEmissionBO($emissionBO)
            ->setDateDemarche($dateDemarche)
            ->setLoueur($loueur)
            ->setExpedition($expedition)
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
     * @return \Misiv\StructType\TypeDIVLN
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
     * @return \Misiv\StructType\TypeDIVLN
     */
    public function setTypeDemarche($typeDemarche = null)
    {
        $this->TypeDemarche = $typeDemarche;
        return $this;
    }
    /**
     * Get TypeLocation value
     * @return string
     */
    public function getTypeLocation()
    {
        return $this->TypeLocation;
    }
    /**
     * Set TypeLocation value
     * @uses \Misiv\EnumType\TypeLoc::valueIsValid()
     * @uses \Misiv\EnumType\TypeLoc::getValidValues()
     * @param string $typeLocation
     * @return \Misiv\StructType\TypeDIVLN
     */
    public function setTypeLocation($typeLocation = null)
    {
        if (!\Misiv\EnumType\TypeLoc::valueIsValid($typeLocation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $typeLocation, implode(', ', \Misiv\EnumType\TypeLoc::getValidValues())), __LINE__);
        }
        $this->TypeLocation = $typeLocation;
        return $this;
    }
    /**
     * Get ModeExpedition value
     * @return string
     */
    public function getModeExpedition()
    {
        return $this->ModeExpedition;
    }
    /**
     * Set ModeExpedition value
     * @uses \Misiv\EnumType\ModeExp::valueIsValid()
     * @uses \Misiv\EnumType\ModeExp::getValidValues()
     * @param string $modeExpedition
     * @return \Misiv\StructType\TypeDIVLN
     */
    public function setModeExpedition($modeExpedition = null)
    {
        if (!\Misiv\EnumType\ModeExp::valueIsValid($modeExpedition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $modeExpedition, implode(', ', \Misiv\EnumType\ModeExp::getValidValues())), __LINE__);
        }
        $this->ModeExpedition = $modeExpedition;
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
     * @return \Misiv\StructType\TypeDIVLN
     */
    public function setAcquereur(\Misiv\StructType\Acquereur $acquereur = null)
    {
        $this->Acquereur = $acquereur;
        return $this;
    }
    /**
     * Get Locataire value
     * @return \Misiv\StructType\Locataire
     */
    public function getLocataire()
    {
        return $this->Locataire;
    }
    /**
     * Set Locataire value
     * @param \Misiv\StructType\Locataire $locataire
     * @return \Misiv\StructType\TypeDIVLN
     */
    public function setLocataire(\Misiv\StructType\Locataire $locataire = null)
    {
        $this->Locataire = $locataire;
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
     * @return \Misiv\StructType\TypeDIVLN
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
     * @return \Misiv\StructType\TypeDIVLN
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
     * @return \Misiv\StructType\TypeDIVLN
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
     * @return \Misiv\StructType\TypeDIVLN
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
     * @return \Misiv\StructType\TypeDIVLN
     */
    public function setDateDemarche($dateDemarche = null)
    {
        $this->DateDemarche = $dateDemarche;
        return $this;
    }
    /**
     * Get Loueur value
     * @return \Misiv\StructType\Loueur|null
     */
    public function getLoueur()
    {
        return $this->Loueur;
    }
    /**
     * Set Loueur value
     * @param \Misiv\StructType\Loueur $loueur
     * @return \Misiv\StructType\TypeDIVLN
     */
    public function setLoueur(\Misiv\StructType\Loueur $loueur = null)
    {
        $this->Loueur = $loueur;
        return $this;
    }
    /**
     * Get Expedition value
     * @return \Misiv\StructType\Expedition|null
     */
    public function getExpedition()
    {
        return $this->Expedition;
    }
    /**
     * Set Expedition value
     * @param \Misiv\StructType\Expedition $expedition
     * @return \Misiv\StructType\TypeDIVLN
     */
    public function setExpedition(\Misiv\StructType\Expedition $expedition = null)
    {
        $this->Expedition = $expedition;
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
     * @return \Misiv\StructType\TypeDIVLN
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
     * @return \Misiv\StructType\TypeDIVLN
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
     * @return \Misiv\StructType\TypeDIVLN
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
