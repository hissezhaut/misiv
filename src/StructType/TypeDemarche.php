<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeDemarche StructType
 * @subpackage Structs
 */
class TypeDemarche extends AbstractStructBase
{
    /**
     * The DIVN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeDIVN
     */
    public $DIVN;
    /**
     * The VNWW
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeVNWW
     */
    public $VNWW;
    /**
     * The VOWW
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeVOWW
     */
    public $VOWW;
    /**
     * The CTVO
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeCTVO
     */
    public $CTVO;
    /**
     * The DA
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeDA
     */
    public $DA;
    /**
     * The DC
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeDC
     */
    public $DC;
    /**
     * The DSV
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeDSV
     */
    public $DSV;
    /**
     * The ECG
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeECG
     */
    public $ECG;
    /**
     * The ECGAUTO
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeECGAUTO
     */
    public $ECGAUTO;
    /**
     * The FUD
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeFUD
     */
    public $FUD;
    /**
     * The DCAL
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeDCAL
     */
    public $DCAL;
    /**
     * The DIVLN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeDIVLN
     */
    public $DIVLN;
    /**
     * The CTVLO
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeCTVLO
     */
    public $CTVLO;
    /**
     * The DAD
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeDAD
     */
    public $DAD;
    /**
     * The DCD
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeDCD
     */
    public $DCD;
    /**
     * The DID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeDID
     */
    public $DID;
    /**
     * Constructor method for TypeDemarche
     * @uses TypeDemarche::setDIVN()
     * @uses TypeDemarche::setVNWW()
     * @uses TypeDemarche::setVOWW()
     * @uses TypeDemarche::setCTVO()
     * @uses TypeDemarche::setDA()
     * @uses TypeDemarche::setDC()
     * @uses TypeDemarche::setDSV()
     * @uses TypeDemarche::setECG()
     * @uses TypeDemarche::setECGAUTO()
     * @uses TypeDemarche::setFUD()
     * @uses TypeDemarche::setDCAL()
     * @uses TypeDemarche::setDIVLN()
     * @uses TypeDemarche::setCTVLO()
     * @uses TypeDemarche::setDAD()
     * @uses TypeDemarche::setDCD()
     * @uses TypeDemarche::setDID()
     * @param \Misiv\StructType\TypeDIVN $dIVN
     * @param \Misiv\StructType\TypeVNWW $vNWW
     * @param \Misiv\StructType\TypeVOWW $vOWW
     * @param \Misiv\StructType\TypeCTVO $cTVO
     * @param \Misiv\StructType\TypeDA $dA
     * @param \Misiv\StructType\TypeDC $dC
     * @param \Misiv\StructType\TypeDSV $dSV
     * @param \Misiv\StructType\TypeECG $eCG
     * @param \Misiv\StructType\TypeECGAUTO $eCGAUTO
     * @param \Misiv\StructType\TypeFUD $fUD
     * @param \Misiv\StructType\TypeDCAL $dCAL
     * @param \Misiv\StructType\TypeDIVLN $dIVLN
     * @param \Misiv\StructType\TypeCTVLO $cTVLO
     * @param \Misiv\StructType\TypeDAD $dAD
     * @param \Misiv\StructType\TypeDCD $dCD
     * @param \Misiv\StructType\TypeDID $dID
     */
    public function __construct(\Misiv\StructType\TypeDIVN $dIVN = null, \Misiv\StructType\TypeVNWW $vNWW = null, \Misiv\StructType\TypeVOWW $vOWW = null, \Misiv\StructType\TypeCTVO $cTVO = null, \Misiv\StructType\TypeDA $dA = null, \Misiv\StructType\TypeDC $dC = null, \Misiv\StructType\TypeDSV $dSV = null, \Misiv\StructType\TypeECG $eCG = null, \Misiv\StructType\TypeECGAUTO $eCGAUTO = null, \Misiv\StructType\TypeFUD $fUD = null, \Misiv\StructType\TypeDCAL $dCAL = null, \Misiv\StructType\TypeDIVLN $dIVLN = null, \Misiv\StructType\TypeCTVLO $cTVLO = null, \Misiv\StructType\TypeDAD $dAD = null, \Misiv\StructType\TypeDCD $dCD = null, \Misiv\StructType\TypeDID $dID = null)
    {
        $this
            ->setDIVN($dIVN)
            ->setVNWW($vNWW)
            ->setVOWW($vOWW)
            ->setCTVO($cTVO)
            ->setDA($dA)
            ->setDC($dC)
            ->setDSV($dSV)
            ->setECG($eCG)
            ->setECGAUTO($eCGAUTO)
            ->setFUD($fUD)
            ->setDCAL($dCAL)
            ->setDIVLN($dIVLN)
            ->setCTVLO($cTVLO)
            ->setDAD($dAD)
            ->setDCD($dCD)
            ->setDID($dID);
    }
    /**
     * Get DIVN value
     * @return \Misiv\StructType\TypeDIVN
     */
    public function getDIVN()
    {
        return $this->DIVN;
    }
    /**
     * Set DIVN value
     * @param \Misiv\StructType\TypeDIVN $dIVN
     * @return \Misiv\StructType\TypeDemarche
     */
    public function setDIVN(\Misiv\StructType\TypeDIVN $dIVN = null)
    {
        $this->DIVN = $dIVN;
        return $this;
    }
    /**
     * Get VNWW value
     * @return \Misiv\StructType\TypeVNWW
     */
    public function getVNWW()
    {
        return $this->VNWW;
    }
    /**
     * Set VNWW value
     * @param \Misiv\StructType\TypeVNWW $vNWW
     * @return \Misiv\StructType\TypeDemarche
     */
    public function setVNWW(\Misiv\StructType\TypeVNWW $vNWW = null)
    {
        $this->VNWW = $vNWW;
        return $this;
    }
    /**
     * Get VOWW value
     * @return \Misiv\StructType\TypeVOWW
     */
    public function getVOWW()
    {
        return $this->VOWW;
    }
    /**
     * Set VOWW value
     * @param \Misiv\StructType\TypeVOWW $vOWW
     * @return \Misiv\StructType\TypeDemarche
     */
    public function setVOWW(\Misiv\StructType\TypeVOWW $vOWW = null)
    {
        $this->VOWW = $vOWW;
        return $this;
    }
    /**
     * Get CTVO value
     * @return \Misiv\StructType\TypeCTVO
     */
    public function getCTVO()
    {
        return $this->CTVO;
    }
    /**
     * Set CTVO value
     * @param \Misiv\StructType\TypeCTVO $cTVO
     * @return \Misiv\StructType\TypeDemarche
     */
    public function setCTVO(\Misiv\StructType\TypeCTVO $cTVO = null)
    {
        $this->CTVO = $cTVO;
        return $this;
    }
    /**
     * Get DA value
     * @return \Misiv\StructType\TypeDA
     */
    public function getDA()
    {
        return $this->DA;
    }
    /**
     * Set DA value
     * @param \Misiv\StructType\TypeDA $dA
     * @return \Misiv\StructType\TypeDemarche
     */
    public function setDA(\Misiv\StructType\TypeDA $dA = null)
    {
        $this->DA = $dA;
        return $this;
    }
    /**
     * Get DC value
     * @return \Misiv\StructType\TypeDC
     */
    public function getDC()
    {
        return $this->DC;
    }
    /**
     * Set DC value
     * @param \Misiv\StructType\TypeDC $dC
     * @return \Misiv\StructType\TypeDemarche
     */
    public function setDC(\Misiv\StructType\TypeDC $dC = null)
    {
        $this->DC = $dC;
        return $this;
    }
    /**
     * Get DSV value
     * @return \Misiv\StructType\TypeDSV
     */
    public function getDSV()
    {
        return $this->DSV;
    }
    /**
     * Set DSV value
     * @param \Misiv\StructType\TypeDSV $dSV
     * @return \Misiv\StructType\TypeDemarche
     */
    public function setDSV(\Misiv\StructType\TypeDSV $dSV = null)
    {
        $this->DSV = $dSV;
        return $this;
    }
    /**
     * Get ECG value
     * @return \Misiv\StructType\TypeECG
     */
    public function getECG()
    {
        return $this->ECG;
    }
    /**
     * Set ECG value
     * @param \Misiv\StructType\TypeECG $eCG
     * @return \Misiv\StructType\TypeDemarche
     */
    public function setECG(\Misiv\StructType\TypeECG $eCG = null)
    {
        $this->ECG = $eCG;
        return $this;
    }
    /**
     * Get ECGAUTO value
     * @return \Misiv\StructType\TypeECGAUTO
     */
    public function getECGAUTO()
    {
        return $this->ECGAUTO;
    }
    /**
     * Set ECGAUTO value
     * @param \Misiv\StructType\TypeECGAUTO $eCGAUTO
     * @return \Misiv\StructType\TypeDemarche
     */
    public function setECGAUTO(\Misiv\StructType\TypeECGAUTO $eCGAUTO = null)
    {
        $this->ECGAUTO = $eCGAUTO;
        return $this;
    }
    /**
     * Get FUD value
     * @return \Misiv\StructType\TypeFUD
     */
    public function getFUD()
    {
        return $this->FUD;
    }
    /**
     * Set FUD value
     * @param \Misiv\StructType\TypeFUD $fUD
     * @return \Misiv\StructType\TypeDemarche
     */
    public function setFUD(\Misiv\StructType\TypeFUD $fUD = null)
    {
        $this->FUD = $fUD;
        return $this;
    }
    /**
     * Get DCAL value
     * @return \Misiv\StructType\TypeDCAL
     */
    public function getDCAL()
    {
        return $this->DCAL;
    }
    /**
     * Set DCAL value
     * @param \Misiv\StructType\TypeDCAL $dCAL
     * @return \Misiv\StructType\TypeDemarche
     */
    public function setDCAL(\Misiv\StructType\TypeDCAL $dCAL = null)
    {
        $this->DCAL = $dCAL;
        return $this;
    }
    /**
     * Get DIVLN value
     * @return \Misiv\StructType\TypeDIVLN
     */
    public function getDIVLN()
    {
        return $this->DIVLN;
    }
    /**
     * Set DIVLN value
     * @param \Misiv\StructType\TypeDIVLN $dIVLN
     * @return \Misiv\StructType\TypeDemarche
     */
    public function setDIVLN(\Misiv\StructType\TypeDIVLN $dIVLN = null)
    {
        $this->DIVLN = $dIVLN;
        return $this;
    }
    /**
     * Get CTVLO value
     * @return \Misiv\StructType\TypeCTVLO
     */
    public function getCTVLO()
    {
        return $this->CTVLO;
    }
    /**
     * Set CTVLO value
     * @param \Misiv\StructType\TypeCTVLO $cTVLO
     * @return \Misiv\StructType\TypeDemarche
     */
    public function setCTVLO(\Misiv\StructType\TypeCTVLO $cTVLO = null)
    {
        $this->CTVLO = $cTVLO;
        return $this;
    }
    /**
     * Get DAD value
     * @return \Misiv\StructType\TypeDAD
     */
    public function getDAD()
    {
        return $this->DAD;
    }
    /**
     * Set DAD value
     * @param \Misiv\StructType\TypeDAD $dAD
     * @return \Misiv\StructType\TypeDemarche
     */
    public function setDAD(\Misiv\StructType\TypeDAD $dAD = null)
    {
        $this->DAD = $dAD;
        return $this;
    }
    /**
     * Get DCD value
     * @return \Misiv\StructType\TypeDCD
     */
    public function getDCD()
    {
        return $this->DCD;
    }
    /**
     * Set DCD value
     * @param \Misiv\StructType\TypeDCD $dCD
     * @return \Misiv\StructType\TypeDemarche
     */
    public function setDCD(\Misiv\StructType\TypeDCD $dCD = null)
    {
        $this->DCD = $dCD;
        return $this;
    }
    /**
     * Get DID value
     * @return \Misiv\StructType\TypeDID
     */
    public function getDID()
    {
        return $this->DID;
    }
    /**
     * Set DID value
     * @param \Misiv\StructType\TypeDID $dID
     * @return \Misiv\StructType\TypeDemarche
     */
    public function setDID(\Misiv\StructType\TypeDID $dID = null)
    {
        $this->DID = $dID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\TypeDemarche
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
