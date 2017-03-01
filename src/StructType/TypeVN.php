<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeVN StructType
 * @subpackage Structs
 */
class TypeVN extends AbstractStructBase
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
     * The D1_Marque
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $D1_Marque;
    /**
     * The D2_Version
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $D2_Version;
    /**
     * The Communautaire
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\Communautaire
     */
    public $Communautaire;
    /**
     * The Nationale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\Nationale
     */
    public $Nationale;
    /**
     * The F1_MMaxTechAdm
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $F1_MMaxTechAdm;
    /**
     * The F2_MMaxAdmServ
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $F2_MMaxAdmServ;
    /**
     * The G_MMaxAvecAttelage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $G_MMaxAvecAttelage;
    /**
     * The G1_PoidsVide
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $G1_PoidsVide;
    /**
     * The J1_Genre
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $J1_Genre;
    /**
     * The J3_Carrosserie
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $J3_Carrosserie;
    /**
     * The S1_NbPlaceAssise
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $S1_NbPlaceAssise;
    /**
     * The WW_Motif
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $WW_Motif;
    /**
     * The WW_Justificatifs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $WW_Justificatifs;
    /**
     * The Z1_Mention1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Z1_Mention1;
    /**
     * The Z1_Value
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Z1_Value;
    /**
     * The NbMentions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NbMentions;
    /**
     * The Mentions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Misiv\StructType\Mentions
     */
    public $Mentions;
    /**
     * Constructor method for TypeVN
     * @uses TypeVN::setVIN()
     * @uses TypeVN::setD1_Marque()
     * @uses TypeVN::setD2_Version()
     * @uses TypeVN::setCommunautaire()
     * @uses TypeVN::setNationale()
     * @uses TypeVN::setF1_MMaxTechAdm()
     * @uses TypeVN::setF2_MMaxAdmServ()
     * @uses TypeVN::setG_MMaxAvecAttelage()
     * @uses TypeVN::setG1_PoidsVide()
     * @uses TypeVN::setJ1_Genre()
     * @uses TypeVN::setJ3_Carrosserie()
     * @uses TypeVN::setS1_NbPlaceAssise()
     * @uses TypeVN::setWW_Motif()
     * @uses TypeVN::setWW_Justificatifs()
     * @uses TypeVN::setZ1_Mention1()
     * @uses TypeVN::setZ1_Value()
     * @uses TypeVN::setNbMentions()
     * @uses TypeVN::setMentions()
     * @param string $vIN
     * @param string $d1_Marque
     * @param string $d2_Version
     * @param \Misiv\StructType\Communautaire $communautaire
     * @param \Misiv\StructType\Nationale $nationale
     * @param int $f1_MMaxTechAdm
     * @param int $f2_MMaxAdmServ
     * @param int $g_MMaxAvecAttelage
     * @param int $g1_PoidsVide
     * @param string $j1_Genre
     * @param string $j3_Carrosserie
     * @param int $s1_NbPlaceAssise
     * @param string $wW_Motif
     * @param boolean $wW_Justificatifs
     * @param string $z1_Mention1
     * @param string $z1_Value
     * @param int $nbMentions
     * @param \Misiv\StructType\Mentions $mentions
     */
    public function __construct($vIN = null, $d1_Marque = null, $d2_Version = null, \Misiv\StructType\Communautaire $communautaire = null, \Misiv\StructType\Nationale $nationale = null, $f1_MMaxTechAdm = null, $f2_MMaxAdmServ = null, $g_MMaxAvecAttelage = null, $g1_PoidsVide = null, $j1_Genre = null, $j3_Carrosserie = null, $s1_NbPlaceAssise = null, $wW_Motif = null, $wW_Justificatifs = null, $z1_Mention1 = null, $z1_Value = null, $nbMentions = null, \Misiv\StructType\Mentions $mentions = null)
    {
        $this
            ->setVIN($vIN)
            ->setD1_Marque($d1_Marque)
            ->setD2_Version($d2_Version)
            ->setCommunautaire($communautaire)
            ->setNationale($nationale)
            ->setF1_MMaxTechAdm($f1_MMaxTechAdm)
            ->setF2_MMaxAdmServ($f2_MMaxAdmServ)
            ->setG_MMaxAvecAttelage($g_MMaxAvecAttelage)
            ->setG1_PoidsVide($g1_PoidsVide)
            ->setJ1_Genre($j1_Genre)
            ->setJ3_Carrosserie($j3_Carrosserie)
            ->setS1_NbPlaceAssise($s1_NbPlaceAssise)
            ->setWW_Motif($wW_Motif)
            ->setWW_Justificatifs($wW_Justificatifs)
            ->setZ1_Mention1($z1_Mention1)
            ->setZ1_Value($z1_Value)
            ->setNbMentions($nbMentions)
            ->setMentions($mentions);
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
     * @return \Misiv\StructType\TypeVN
     */
    public function setVIN($vIN = null)
    {
        $this->VIN = $vIN;
        return $this;
    }
    /**
     * Get D1_Marque value
     * @return string
     */
    public function getD1_Marque()
    {
        return $this->D1_Marque;
    }
    /**
     * Set D1_Marque value
     * @param string $d1_Marque
     * @return \Misiv\StructType\TypeVN
     */
    public function setD1_Marque($d1_Marque = null)
    {
        $this->D1_Marque = $d1_Marque;
        return $this;
    }
    /**
     * Get D2_Version value
     * @return string
     */
    public function getD2_Version()
    {
        return $this->D2_Version;
    }
    /**
     * Set D2_Version value
     * @param string $d2_Version
     * @return \Misiv\StructType\TypeVN
     */
    public function setD2_Version($d2_Version = null)
    {
        $this->D2_Version = $d2_Version;
        return $this;
    }
    /**
     * Get Communautaire value
     * @return \Misiv\StructType\Communautaire
     */
    public function getCommunautaire()
    {
        return $this->Communautaire;
    }
    /**
     * Set Communautaire value
     * @param \Misiv\StructType\Communautaire $communautaire
     * @return \Misiv\StructType\TypeVN
     */
    public function setCommunautaire(\Misiv\StructType\Communautaire $communautaire = null)
    {
        $this->Communautaire = $communautaire;
        return $this;
    }
    /**
     * Get Nationale value
     * @return \Misiv\StructType\Nationale
     */
    public function getNationale()
    {
        return $this->Nationale;
    }
    /**
     * Set Nationale value
     * @param \Misiv\StructType\Nationale $nationale
     * @return \Misiv\StructType\TypeVN
     */
    public function setNationale(\Misiv\StructType\Nationale $nationale = null)
    {
        $this->Nationale = $nationale;
        return $this;
    }
    /**
     * Get F1_MMaxTechAdm value
     * @return int
     */
    public function getF1_MMaxTechAdm()
    {
        return $this->F1_MMaxTechAdm;
    }
    /**
     * Set F1_MMaxTechAdm value
     * @param int $f1_MMaxTechAdm
     * @return \Misiv\StructType\TypeVN
     */
    public function setF1_MMaxTechAdm($f1_MMaxTechAdm = null)
    {
        $this->F1_MMaxTechAdm = $f1_MMaxTechAdm;
        return $this;
    }
    /**
     * Get F2_MMaxAdmServ value
     * @return int
     */
    public function getF2_MMaxAdmServ()
    {
        return $this->F2_MMaxAdmServ;
    }
    /**
     * Set F2_MMaxAdmServ value
     * @param int $f2_MMaxAdmServ
     * @return \Misiv\StructType\TypeVN
     */
    public function setF2_MMaxAdmServ($f2_MMaxAdmServ = null)
    {
        $this->F2_MMaxAdmServ = $f2_MMaxAdmServ;
        return $this;
    }
    /**
     * Get G_MMaxAvecAttelage value
     * @return int
     */
    public function getG_MMaxAvecAttelage()
    {
        return $this->G_MMaxAvecAttelage;
    }
    /**
     * Set G_MMaxAvecAttelage value
     * @param int $g_MMaxAvecAttelage
     * @return \Misiv\StructType\TypeVN
     */
    public function setG_MMaxAvecAttelage($g_MMaxAvecAttelage = null)
    {
        $this->G_MMaxAvecAttelage = $g_MMaxAvecAttelage;
        return $this;
    }
    /**
     * Get G1_PoidsVide value
     * @return int
     */
    public function getG1_PoidsVide()
    {
        return $this->G1_PoidsVide;
    }
    /**
     * Set G1_PoidsVide value
     * @param int $g1_PoidsVide
     * @return \Misiv\StructType\TypeVN
     */
    public function setG1_PoidsVide($g1_PoidsVide = null)
    {
        $this->G1_PoidsVide = $g1_PoidsVide;
        return $this;
    }
    /**
     * Get J1_Genre value
     * @return string
     */
    public function getJ1_Genre()
    {
        return $this->J1_Genre;
    }
    /**
     * Set J1_Genre value
     * @param string $j1_Genre
     * @return \Misiv\StructType\TypeVN
     */
    public function setJ1_Genre($j1_Genre = null)
    {
        $this->J1_Genre = $j1_Genre;
        return $this;
    }
    /**
     * Get J3_Carrosserie value
     * @return string
     */
    public function getJ3_Carrosserie()
    {
        return $this->J3_Carrosserie;
    }
    /**
     * Set J3_Carrosserie value
     * @param string $j3_Carrosserie
     * @return \Misiv\StructType\TypeVN
     */
    public function setJ3_Carrosserie($j3_Carrosserie = null)
    {
        $this->J3_Carrosserie = $j3_Carrosserie;
        return $this;
    }
    /**
     * Get S1_NbPlaceAssise value
     * @return int
     */
    public function getS1_NbPlaceAssise()
    {
        return $this->S1_NbPlaceAssise;
    }
    /**
     * Set S1_NbPlaceAssise value
     * @param int $s1_NbPlaceAssise
     * @return \Misiv\StructType\TypeVN
     */
    public function setS1_NbPlaceAssise($s1_NbPlaceAssise = null)
    {
        $this->S1_NbPlaceAssise = $s1_NbPlaceAssise;
        return $this;
    }
    /**
     * Get WW_Motif value
     * @return string|null
     */
    public function getWW_Motif()
    {
        return $this->WW_Motif;
    }
    /**
     * Set WW_Motif value
     * @param string $wW_Motif
     * @return \Misiv\StructType\TypeVN
     */
    public function setWW_Motif($wW_Motif = null)
    {
        $this->WW_Motif = $wW_Motif;
        return $this;
    }
    /**
     * Get WW_Justificatifs value
     * @return boolean|null
     */
    public function getWW_Justificatifs()
    {
        return $this->WW_Justificatifs;
    }
    /**
     * Set WW_Justificatifs value
     * @param boolean $wW_Justificatifs
     * @return \Misiv\StructType\TypeVN
     */
    public function setWW_Justificatifs($wW_Justificatifs = null)
    {
        $this->WW_Justificatifs = $wW_Justificatifs;
        return $this;
    }
    /**
     * Get Z1_Mention1 value
     * @return string|null
     */
    public function getZ1_Mention1()
    {
        return $this->Z1_Mention1;
    }
    /**
     * Set Z1_Mention1 value
     * @uses \Misiv\EnumType\Z1_Mention1::valueIsValid()
     * @uses \Misiv\EnumType\Z1_Mention1::getValidValues()
     * @param string $z1_Mention1
     * @return \Misiv\StructType\TypeVN
     */
    public function setZ1_Mention1($z1_Mention1 = null)
    {
        if (!\Misiv\EnumType\Z1_Mention1::valueIsValid($z1_Mention1)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $z1_Mention1, implode(', ', \Misiv\EnumType\Z1_Mention1::getValidValues())), __LINE__);
        }
        $this->Z1_Mention1 = $z1_Mention1;
        return $this;
    }
    /**
     * Get Z1_Value value
     * @return string|null
     */
    public function getZ1_Value()
    {
        return $this->Z1_Value;
    }
    /**
     * Set Z1_Value value
     * @param string $z1_Value
     * @return \Misiv\StructType\TypeVN
     */
    public function setZ1_Value($z1_Value = null)
    {
        $this->Z1_Value = $z1_Value;
        return $this;
    }
    /**
     * Get NbMentions value
     * @return int|null
     */
    public function getNbMentions()
    {
        return $this->NbMentions;
    }
    /**
     * Set NbMentions value
     * @param int $nbMentions
     * @return \Misiv\StructType\TypeVN
     */
    public function setNbMentions($nbMentions = null)
    {
        $this->NbMentions = $nbMentions;
        return $this;
    }
    /**
     * Get Mentions value
     * @return \Misiv\StructType\Mentions|null
     */
    public function getMentions()
    {
        return $this->Mentions;
    }
    /**
     * Set Mentions value
     * @param \Misiv\StructType\Mentions $mentions
     * @return \Misiv\StructType\TypeVN
     */
    public function setMentions(\Misiv\StructType\Mentions $mentions = null)
    {
        $this->Mentions = $mentions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\TypeVN
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
