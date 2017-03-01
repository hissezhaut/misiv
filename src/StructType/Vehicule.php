<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vehicule StructType
 * @subpackage Structs
 */
class Vehicule extends AbstractStructBase
{
    /**
     * The VIN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 17
     * - minLength: 1
     * - pattern: [0-9A-Z]*
     * @var string
     */
    public $VIN;
    /**
     * The Immatriculation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - maxLength: 10
     * - minLength: 7
     * - pattern: ([A-Z]{1,2}(-|\s)?\d{2,3}(-|\s)?[A-Z]{1,2})|(\d{1,4}\s?[A-Z]{2,3}\s?(2[AB]|\d{1,3}))
     * @var string
     */
    public $Immatriculation;
    /**
     * The CIPresent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $CIPresent;
    /**
     * The CO2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CO2;
    /**
     * The Puissance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Puissance;
    /**
     * The Genre
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Genre;
    /**
     * The PTAC
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PTAC;
    /**
     * The Energie
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Energie;
    /**
     * The Departement
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: 0[1-9]|[1-8]\d|2[AB]|9[0-7]|97[0-7]
     * @var string
     */
    public $Departement;
    /**
     * The PremiereImmat
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $PremiereImmat;
    /**
     * The NumFormule
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NumFormule;
    /**
     * The DateCI
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 19
     * - pattern: [0-9]{2}/[0-9]{2}/[0-9]{4}(\s([01][0-9]|2[0123])(:[0-5][0-9]){1,2})?
     * @var string
     */
    public $DateCI;
    /**
     * The DateMEC
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 19
     * - pattern: [0-9]{2}/[0-9]{2}/[0-9]{4}(\s([01][0-9]|2[0123])(:[0-5][0-9]){1,2})?
     * @var string
     */
    public $DateMEC;
    /**
     * The TypeVehicule
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TypeVehicule;
    /**
     * The Collection
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $Collection;
    /**
     * The TypeAchat
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TypeAchat;
    /**
     * Constructor method for Vehicule
     * @uses Vehicule::setVIN()
     * @uses Vehicule::setImmatriculation()
     * @uses Vehicule::setCIPresent()
     * @uses Vehicule::setCO2()
     * @uses Vehicule::setPuissance()
     * @uses Vehicule::setGenre()
     * @uses Vehicule::setPTAC()
     * @uses Vehicule::setEnergie()
     * @uses Vehicule::setDepartement()
     * @uses Vehicule::setPremiereImmat()
     * @uses Vehicule::setNumFormule()
     * @uses Vehicule::setDateCI()
     * @uses Vehicule::setDateMEC()
     * @uses Vehicule::setTypeVehicule()
     * @uses Vehicule::setCollection()
     * @uses Vehicule::setTypeAchat()
     * @param string $vIN
     * @param string $immatriculation
     * @param boolean $cIPresent
     * @param int $cO2
     * @param int $puissance
     * @param string $genre
     * @param string $pTAC
     * @param string $energie
     * @param string $departement
     * @param boolean $premiereImmat
     * @param string $numFormule
     * @param string $dateCI
     * @param string $dateMEC
     * @param string $typeVehicule
     * @param boolean $collection
     * @param string $typeAchat
     */
    public function __construct($vIN = null, $immatriculation = null, $cIPresent = null, $cO2 = null, $puissance = null, $genre = null, $pTAC = null, $energie = null, $departement = null, $premiereImmat = null, $numFormule = null, $dateCI = null, $dateMEC = null, $typeVehicule = null, $collection = null, $typeAchat = null)
    {
        $this
            ->setVIN($vIN)
            ->setImmatriculation($immatriculation)
            ->setCIPresent($cIPresent)
            ->setCO2($cO2)
            ->setPuissance($puissance)
            ->setGenre($genre)
            ->setPTAC($pTAC)
            ->setEnergie($energie)
            ->setDepartement($departement)
            ->setPremiereImmat($premiereImmat)
            ->setNumFormule($numFormule)
            ->setDateCI($dateCI)
            ->setDateMEC($dateMEC)
            ->setTypeVehicule($typeVehicule)
            ->setCollection($collection)
            ->setTypeAchat($typeAchat);
    }
    /**
     * Get VIN value
     * @return string
     */
    public function getVIN()
    {
        return $this->VIN;
    }
    /**
     * Set VIN value
     * @param string $vIN
     * @return \Misiv\StructType\Vehicule
     */
    public function setVIN($vIN = null)
    {
        $this->VIN = $vIN;
        return $this;
    }
    /**
     * Get Immatriculation value
     * @return string
     */
    public function getImmatriculation()
    {
        return $this->Immatriculation;
    }
    /**
     * Set Immatriculation value
     * @param string $immatriculation
     * @return \Misiv\StructType\Vehicule
     */
    public function setImmatriculation($immatriculation = null)
    {
        $this->Immatriculation = $immatriculation;
        return $this;
    }
    /**
     * Get CIPresent value
     * @return boolean
     */
    public function getCIPresent()
    {
        return $this->CIPresent;
    }
    /**
     * Set CIPresent value
     * @param boolean $cIPresent
     * @return \Misiv\StructType\Vehicule
     */
    public function setCIPresent($cIPresent = null)
    {
        $this->CIPresent = $cIPresent;
        return $this;
    }
    /**
     * Get CO2 value
     * @return int
     */
    public function getCO2()
    {
        return $this->CO2;
    }
    /**
     * Set CO2 value
     * @param int $cO2
     * @return \Misiv\StructType\Vehicule
     */
    public function setCO2($cO2 = null)
    {
        $this->CO2 = $cO2;
        return $this;
    }
    /**
     * Get Puissance value
     * @return int
     */
    public function getPuissance()
    {
        return $this->Puissance;
    }
    /**
     * Set Puissance value
     * @param int $puissance
     * @return \Misiv\StructType\Vehicule
     */
    public function setPuissance($puissance = null)
    {
        $this->Puissance = $puissance;
        return $this;
    }
    /**
     * Get Genre value
     * @return string
     */
    public function getGenre()
    {
        return $this->Genre;
    }
    /**
     * Set Genre value
     * @uses \Misiv\EnumType\TypeECGGenre::valueIsValid()
     * @uses \Misiv\EnumType\TypeECGGenre::getValidValues()
     * @param string $genre
     * @return \Misiv\StructType\Vehicule
     */
    public function setGenre($genre = null)
    {
        if (!\Misiv\EnumType\TypeECGGenre::valueIsValid($genre)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $genre, implode(', ', \Misiv\EnumType\TypeECGGenre::getValidValues())), __LINE__);
        }
        $this->Genre = $genre;
        return $this;
    }
    /**
     * Get PTAC value
     * @return string
     */
    public function getPTAC()
    {
        return $this->PTAC;
    }
    /**
     * Set PTAC value
     * @uses \Misiv\EnumType\TypeECGPTAC::valueIsValid()
     * @uses \Misiv\EnumType\TypeECGPTAC::getValidValues()
     * @param string $pTAC
     * @return \Misiv\StructType\Vehicule
     */
    public function setPTAC($pTAC = null)
    {
        if (!\Misiv\EnumType\TypeECGPTAC::valueIsValid($pTAC)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pTAC, implode(', ', \Misiv\EnumType\TypeECGPTAC::getValidValues())), __LINE__);
        }
        $this->PTAC = $pTAC;
        return $this;
    }
    /**
     * Get Energie value
     * @return string
     */
    public function getEnergie()
    {
        return $this->Energie;
    }
    /**
     * Set Energie value
     * @uses \Misiv\EnumType\TypeECGEnergie::valueIsValid()
     * @uses \Misiv\EnumType\TypeECGEnergie::getValidValues()
     * @param string $energie
     * @return \Misiv\StructType\Vehicule
     */
    public function setEnergie($energie = null)
    {
        if (!\Misiv\EnumType\TypeECGEnergie::valueIsValid($energie)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $energie, implode(', ', \Misiv\EnumType\TypeECGEnergie::getValidValues())), __LINE__);
        }
        $this->Energie = $energie;
        return $this;
    }
    /**
     * Get Departement value
     * @return string
     */
    public function getDepartement()
    {
        return $this->Departement;
    }
    /**
     * Set Departement value
     * @param string $departement
     * @return \Misiv\StructType\Vehicule
     */
    public function setDepartement($departement = null)
    {
        $this->Departement = $departement;
        return $this;
    }
    /**
     * Get PremiereImmat value
     * @return boolean
     */
    public function getPremiereImmat()
    {
        return $this->PremiereImmat;
    }
    /**
     * Set PremiereImmat value
     * @param boolean $premiereImmat
     * @return \Misiv\StructType\Vehicule
     */
    public function setPremiereImmat($premiereImmat = null)
    {
        $this->PremiereImmat = $premiereImmat;
        return $this;
    }
    /**
     * Get NumFormule value
     * @return string|null
     */
    public function getNumFormule()
    {
        return $this->NumFormule;
    }
    /**
     * Set NumFormule value
     * @param string $numFormule
     * @return \Misiv\StructType\Vehicule
     */
    public function setNumFormule($numFormule = null)
    {
        $this->NumFormule = $numFormule;
        return $this;
    }
    /**
     * Get DateCI value
     * @return string|null
     */
    public function getDateCI()
    {
        return $this->DateCI;
    }
    /**
     * Set DateCI value
     * @param string $dateCI
     * @return \Misiv\StructType\Vehicule
     */
    public function setDateCI($dateCI = null)
    {
        $this->DateCI = $dateCI;
        return $this;
    }
    /**
     * Get DateMEC value
     * @return string|null
     */
    public function getDateMEC()
    {
        return $this->DateMEC;
    }
    /**
     * Set DateMEC value
     * @param string $dateMEC
     * @return \Misiv\StructType\Vehicule
     */
    public function setDateMEC($dateMEC = null)
    {
        $this->DateMEC = $dateMEC;
        return $this;
    }
    /**
     * Get TypeVehicule value
     * @return string|null
     */
    public function getTypeVehicule()
    {
        return $this->TypeVehicule;
    }
    /**
     * Set TypeVehicule value
     * @uses \Misiv\EnumType\TypeECGVehicule::valueIsValid()
     * @uses \Misiv\EnumType\TypeECGVehicule::getValidValues()
     * @param string $typeVehicule
     * @return \Misiv\StructType\Vehicule
     */
    public function setTypeVehicule($typeVehicule = null)
    {
        if (!\Misiv\EnumType\TypeECGVehicule::valueIsValid($typeVehicule)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $typeVehicule, implode(', ', \Misiv\EnumType\TypeECGVehicule::getValidValues())), __LINE__);
        }
        $this->TypeVehicule = $typeVehicule;
        return $this;
    }
    /**
     * Get Collection value
     * @return boolean|null
     */
    public function getCollection()
    {
        return $this->Collection;
    }
    /**
     * Set Collection value
     * @param boolean $collection
     * @return \Misiv\StructType\Vehicule
     */
    public function setCollection($collection = null)
    {
        $this->Collection = $collection;
        return $this;
    }
    /**
     * Get TypeAchat value
     * @return string|null
     */
    public function getTypeAchat()
    {
        return $this->TypeAchat;
    }
    /**
     * Set TypeAchat value
     * @uses \Misiv\EnumType\TypeECGAchat::valueIsValid()
     * @uses \Misiv\EnumType\TypeECGAchat::getValidValues()
     * @param string $typeAchat
     * @return \Misiv\StructType\Vehicule
     */
    public function setTypeAchat($typeAchat = null)
    {
        if (!\Misiv\EnumType\TypeECGAchat::valueIsValid($typeAchat)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $typeAchat, implode(', ', \Misiv\EnumType\TypeECGAchat::getValidValues())), __LINE__);
        }
        $this->TypeAchat = $typeAchat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\Vehicule
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
