<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeDAD StructType
 * @subpackage Structs
 */
class TypeDAD extends AbstractStructBase
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
     * - fixed: DAD
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TypeDemarche;
    /**
     * The DateAchat
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 19
     * - pattern: [0-9]{2}/[0-9]{2}/[0-9]{4}(\s([01][0-9]|2[0123])(:[0-5][0-9]){1,2})?
     * @var string
     */
    public $DateAchat;
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
     * The CertifDest
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $CertifDest;
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
     * The Vehicule
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\Vehicule
     */
    public $Vehicule;
    /**
     * The Reponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Misiv\StructType\Reponse
     */
    public $Reponse;
    /**
     * Constructor method for TypeDAD
     * @uses TypeDAD::setID()
     * @uses TypeDAD::setTypeDemarche()
     * @uses TypeDAD::setDateAchat()
     * @uses TypeDAD::setDateDemarche()
     * @uses TypeDAD::setCertifDest()
     * @uses TypeDAD::setTitulaire()
     * @uses TypeDAD::setAcquereur()
     * @uses TypeDAD::setVehicule()
     * @uses TypeDAD::setReponse()
     * @param int $iD
     * @param string $typeDemarche
     * @param string $dateAchat
     * @param string $dateDemarche
     * @param boolean $certifDest
     * @param \Misiv\StructType\Titulaire $titulaire
     * @param \Misiv\StructType\Acquereur $acquereur
     * @param \Misiv\StructType\Vehicule $vehicule
     * @param \Misiv\StructType\Reponse $reponse
     */
    public function __construct($iD = null, $typeDemarche = null, $dateAchat = null, $dateDemarche = null, $certifDest = null, \Misiv\StructType\Titulaire $titulaire = null, \Misiv\StructType\Acquereur $acquereur = null, \Misiv\StructType\Vehicule $vehicule = null, \Misiv\StructType\Reponse $reponse = null)
    {
        $this
            ->setID($iD)
            ->setTypeDemarche($typeDemarche)
            ->setDateAchat($dateAchat)
            ->setDateDemarche($dateDemarche)
            ->setCertifDest($certifDest)
            ->setTitulaire($titulaire)
            ->setAcquereur($acquereur)
            ->setVehicule($vehicule)
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
     * @return \Misiv\StructType\TypeDAD
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
     * @return \Misiv\StructType\TypeDAD
     */
    public function setTypeDemarche($typeDemarche = null)
    {
        $this->TypeDemarche = $typeDemarche;
        return $this;
    }
    /**
     * Get DateAchat value
     * @return string
     */
    public function getDateAchat()
    {
        return $this->DateAchat;
    }
    /**
     * Set DateAchat value
     * @param string $dateAchat
     * @return \Misiv\StructType\TypeDAD
     */
    public function setDateAchat($dateAchat = null)
    {
        $this->DateAchat = $dateAchat;
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
     * @return \Misiv\StructType\TypeDAD
     */
    public function setDateDemarche($dateDemarche = null)
    {
        $this->DateDemarche = $dateDemarche;
        return $this;
    }
    /**
     * Get CertifDest value
     * @return boolean
     */
    public function getCertifDest()
    {
        return $this->CertifDest;
    }
    /**
     * Set CertifDest value
     * @param boolean $certifDest
     * @return \Misiv\StructType\TypeDAD
     */
    public function setCertifDest($certifDest = null)
    {
        $this->CertifDest = $certifDest;
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
     * @return \Misiv\StructType\TypeDAD
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
     * @return \Misiv\StructType\TypeDAD
     */
    public function setAcquereur(\Misiv\StructType\Acquereur $acquereur = null)
    {
        $this->Acquereur = $acquereur;
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
     * @return \Misiv\StructType\TypeDAD
     */
    public function setVehicule(\Misiv\StructType\Vehicule $vehicule = null)
    {
        $this->Vehicule = $vehicule;
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
     * @return \Misiv\StructType\TypeDAD
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
     * @return \Misiv\StructType\TypeDAD
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
