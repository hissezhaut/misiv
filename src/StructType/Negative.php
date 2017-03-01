<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Negative StructType
 * @subpackage Structs
 */
class Negative extends AbstractStructBase
{
    /**
     * The Erreur
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Erreur;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Code;
    /**
     * The VIN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 17
     * - minLength: 1
     * - pattern: [0-9A-Z]*
     * @var string
     */
    public $VIN;
    /**
     * The CO2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $CO2;
    /**
     * The Puissance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Puissance;
    /**
     * The Genre
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Genre;
    /**
     * The PTAC
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PTAC;
    /**
     * The Energie
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Energie;
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
     * Constructor method for Negative
     * @uses Negative::setErreur()
     * @uses Negative::setCode()
     * @uses Negative::setVIN()
     * @uses Negative::setCO2()
     * @uses Negative::setPuissance()
     * @uses Negative::setGenre()
     * @uses Negative::setPTAC()
     * @uses Negative::setEnergie()
     * @uses Negative::setDateMEC()
     * @param string $erreur
     * @param int $code
     * @param string $vIN
     * @param int $cO2
     * @param int $puissance
     * @param string $genre
     * @param string $pTAC
     * @param string $energie
     * @param string $dateMEC
     */
    public function __construct($erreur = null, $code = null, $vIN = null, $cO2 = null, $puissance = null, $genre = null, $pTAC = null, $energie = null, $dateMEC = null)
    {
        $this
            ->setErreur($erreur)
            ->setCode($code)
            ->setVIN($vIN)
            ->setCO2($cO2)
            ->setPuissance($puissance)
            ->setGenre($genre)
            ->setPTAC($pTAC)
            ->setEnergie($energie)
            ->setDateMEC($dateMEC);
    }
    /**
     * Get Erreur value
     * @return string
     */
    public function getErreur()
    {
        return $this->Erreur;
    }
    /**
     * Set Erreur value
     * @param string $erreur
     * @return \Misiv\StructType\Negative
     */
    public function setErreur($erreur = null)
    {
        $this->Erreur = $erreur;
        return $this;
    }
    /**
     * Get Code value
     * @return int|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Misiv\StructType\Negative
     */
    public function setCode($code = null)
    {
        $this->Code = $code;
        return $this;
    }
    /**
     * Get VIN value
     * @return string|null
     */
    public function getVIN()
    {
        return $this->VIN;
    }
    /**
     * Set VIN value
     * @param string $vIN
     * @return \Misiv\StructType\Negative
     */
    public function setVIN($vIN = null)
    {
        $this->VIN = $vIN;
        return $this;
    }
    /**
     * Get CO2 value
     * @return int|null
     */
    public function getCO2()
    {
        return $this->CO2;
    }
    /**
     * Set CO2 value
     * @param int $cO2
     * @return \Misiv\StructType\Negative
     */
    public function setCO2($cO2 = null)
    {
        $this->CO2 = $cO2;
        return $this;
    }
    /**
     * Get Puissance value
     * @return int|null
     */
    public function getPuissance()
    {
        return $this->Puissance;
    }
    /**
     * Set Puissance value
     * @param int $puissance
     * @return \Misiv\StructType\Negative
     */
    public function setPuissance($puissance = null)
    {
        $this->Puissance = $puissance;
        return $this;
    }
    /**
     * Get Genre value
     * @return string|null
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
     * @return \Misiv\StructType\Negative
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
     * @return string|null
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
     * @return \Misiv\StructType\Negative
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
     * @return string|null
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
     * @return \Misiv\StructType\Negative
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
     * @return \Misiv\StructType\Negative
     */
    public function setDateMEC($dateMEC = null)
    {
        $this->DateMEC = $dateMEC;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\Negative
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
