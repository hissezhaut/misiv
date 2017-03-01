<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeFUD StructType
 * @subpackage Structs
 */
class TypeFUD extends AbstractStructBase
{
    /**
     * The TypeDemarche
     * Meta informations extracted from the WSDL
     * - fixed: FUD
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
     * The Motif
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Motif;
    /**
     * The Titulaire
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\Titulaire
     */
    public $Titulaire;
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
     * The EmissionBO
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $EmissionBO;
    /**
     * The CertifReglement
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $CertifReglement;
    /**
     * The Reponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Misiv\StructType\Reponse
     */
    public $Reponse;
    /**
     * Constructor method for TypeFUD
     * @uses TypeFUD::setTypeDemarche()
     * @uses TypeFUD::setDateDemarche()
     * @uses TypeFUD::setMotif()
     * @uses TypeFUD::setTitulaire()
     * @uses TypeFUD::setVehicule()
     * @uses TypeFUD::setID()
     * @uses TypeFUD::setPaiementCBClient()
     * @uses TypeFUD::setEmissionBO()
     * @uses TypeFUD::setCertifReglement()
     * @uses TypeFUD::setReponse()
     * @param string $typeDemarche
     * @param string $dateDemarche
     * @param string $motif
     * @param \Misiv\StructType\Titulaire $titulaire
     * @param \Misiv\StructType\Vehicule $vehicule
     * @param int $iD
     * @param boolean $paiementCBClient
     * @param boolean $emissionBO
     * @param boolean $certifReglement
     * @param \Misiv\StructType\Reponse $reponse
     */
    public function __construct($typeDemarche = null, $dateDemarche = null, $motif = null, \Misiv\StructType\Titulaire $titulaire = null, \Misiv\StructType\Vehicule $vehicule = null, $iD = null, $paiementCBClient = null, $emissionBO = null, $certifReglement = null, \Misiv\StructType\Reponse $reponse = null)
    {
        $this
            ->setTypeDemarche($typeDemarche)
            ->setDateDemarche($dateDemarche)
            ->setMotif($motif)
            ->setTitulaire($titulaire)
            ->setVehicule($vehicule)
            ->setID($iD)
            ->setPaiementCBClient($paiementCBClient)
            ->setEmissionBO($emissionBO)
            ->setCertifReglement($certifReglement)
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
     * @return \Misiv\StructType\TypeFUD
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
     * @return \Misiv\StructType\TypeFUD
     */
    public function setDateDemarche($dateDemarche = null)
    {
        $this->DateDemarche = $dateDemarche;
        return $this;
    }
    /**
     * Get Motif value
     * @return string
     */
    public function getMotif()
    {
        return $this->Motif;
    }
    /**
     * Set Motif value
     * @uses \Misiv\EnumType\MotifFUD::valueIsValid()
     * @uses \Misiv\EnumType\MotifFUD::getValidValues()
     * @param string $motif
     * @return \Misiv\StructType\TypeFUD
     */
    public function setMotif($motif = null)
    {
        if (!\Misiv\EnumType\MotifFUD::valueIsValid($motif)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $motif, implode(', ', \Misiv\EnumType\MotifFUD::getValidValues())), __LINE__);
        }
        $this->Motif = $motif;
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
     * @return \Misiv\StructType\TypeFUD
     */
    public function setTitulaire(\Misiv\StructType\Titulaire $titulaire = null)
    {
        $this->Titulaire = $titulaire;
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
     * @return \Misiv\StructType\TypeFUD
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
     * @return \Misiv\StructType\TypeFUD
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
     * @return \Misiv\StructType\TypeFUD
     */
    public function setPaiementCBClient($paiementCBClient = null)
    {
        $this->PaiementCBClient = $paiementCBClient;
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
     * @return \Misiv\StructType\TypeFUD
     */
    public function setEmissionBO($emissionBO = null)
    {
        $this->EmissionBO = $emissionBO;
        return $this;
    }
    /**
     * Get CertifReglement value
     * @return boolean|null
     */
    public function getCertifReglement()
    {
        return $this->CertifReglement;
    }
    /**
     * Set CertifReglement value
     * @param boolean $certifReglement
     * @return \Misiv\StructType\TypeFUD
     */
    public function setCertifReglement($certifReglement = null)
    {
        $this->CertifReglement = $certifReglement;
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
     * @return \Misiv\StructType\TypeFUD
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
     * @return \Misiv\StructType\TypeFUD
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
