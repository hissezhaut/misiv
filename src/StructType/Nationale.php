<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Nationale StructType
 * @subpackage Structs
 */
class Nationale extends AbstractStructBase
{
    /**
     * The J_CategorieCE
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $J_CategorieCE;
    /**
     * The P6_PuissFiscale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $P6_PuissFiscale;
    /**
     * The D3_Denomination
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $D3_Denomination;
    /**
     * The F3_MMaxAdmEns
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $F3_MMaxAdmEns;
    /**
     * The J2_CarrosserieCE
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $J2_CarrosserieCE;
    /**
     * The P1_Cyl
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var decimal
     */
    public $P1_Cyl;
    /**
     * The P2_PuissKW
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var decimal
     */
    public $P2_PuissKW;
    /**
     * The P3_Energie
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $P3_Energie;
    /**
     * The Q_RapportPuissMasse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var decimal
     */
    public $Q_RapportPuissMasse;
    /**
     * The S2_NbPlaceDebout
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $S2_NbPlaceDebout;
    /**
     * The U1_NiveauSonore
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $U1_NiveauSonore;
    /**
     * The U2_NbTours
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $U2_NbTours;
    /**
     * The V7_Co2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $V7_Co2;
    /**
     * The V9_ClasseEnvCE
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $V9_ClasseEnvCE;
    /**
     * Constructor method for Nationale
     * @uses Nationale::setJ_CategorieCE()
     * @uses Nationale::setP6_PuissFiscale()
     * @uses Nationale::setD3_Denomination()
     * @uses Nationale::setF3_MMaxAdmEns()
     * @uses Nationale::setJ2_CarrosserieCE()
     * @uses Nationale::setP1_Cyl()
     * @uses Nationale::setP2_PuissKW()
     * @uses Nationale::setP3_Energie()
     * @uses Nationale::setQ_RapportPuissMasse()
     * @uses Nationale::setS2_NbPlaceDebout()
     * @uses Nationale::setU1_NiveauSonore()
     * @uses Nationale::setU2_NbTours()
     * @uses Nationale::setV7_Co2()
     * @uses Nationale::setV9_ClasseEnvCE()
     * @param string $j_CategorieCE
     * @param int $p6_PuissFiscale
     * @param string $d3_Denomination
     * @param int $f3_MMaxAdmEns
     * @param string $j2_CarrosserieCE
     * @param decimal $p1_Cyl
     * @param decimal $p2_PuissKW
     * @param string $p3_Energie
     * @param decimal $q_RapportPuissMasse
     * @param int $s2_NbPlaceDebout
     * @param int $u1_NiveauSonore
     * @param int $u2_NbTours
     * @param int $v7_Co2
     * @param string $v9_ClasseEnvCE
     */
    public function __construct($j_CategorieCE = null, $p6_PuissFiscale = null, $d3_Denomination = null, $f3_MMaxAdmEns = null, $j2_CarrosserieCE = null, $p1_Cyl = null, $p2_PuissKW = null, $p3_Energie = null, $q_RapportPuissMasse = null, $s2_NbPlaceDebout = null, $u1_NiveauSonore = null, $u2_NbTours = null, $v7_Co2 = null, $v9_ClasseEnvCE = null)
    {
        $this
            ->setJ_CategorieCE($j_CategorieCE)
            ->setP6_PuissFiscale($p6_PuissFiscale)
            ->setD3_Denomination($d3_Denomination)
            ->setF3_MMaxAdmEns($f3_MMaxAdmEns)
            ->setJ2_CarrosserieCE($j2_CarrosserieCE)
            ->setP1_Cyl($p1_Cyl)
            ->setP2_PuissKW($p2_PuissKW)
            ->setP3_Energie($p3_Energie)
            ->setQ_RapportPuissMasse($q_RapportPuissMasse)
            ->setS2_NbPlaceDebout($s2_NbPlaceDebout)
            ->setU1_NiveauSonore($u1_NiveauSonore)
            ->setU2_NbTours($u2_NbTours)
            ->setV7_Co2($v7_Co2)
            ->setV9_ClasseEnvCE($v9_ClasseEnvCE);
    }
    /**
     * Get J_CategorieCE value
     * @return string
     */
    public function getJ_CategorieCE()
    {
        return $this->J_CategorieCE;
    }
    /**
     * Set J_CategorieCE value
     * @param string $j_CategorieCE
     * @return \Misiv\StructType\Nationale
     */
    public function setJ_CategorieCE($j_CategorieCE = null)
    {
        $this->J_CategorieCE = $j_CategorieCE;
        return $this;
    }
    /**
     * Get P6_PuissFiscale value
     * @return int
     */
    public function getP6_PuissFiscale()
    {
        return $this->P6_PuissFiscale;
    }
    /**
     * Set P6_PuissFiscale value
     * @param int $p6_PuissFiscale
     * @return \Misiv\StructType\Nationale
     */
    public function setP6_PuissFiscale($p6_PuissFiscale = null)
    {
        $this->P6_PuissFiscale = $p6_PuissFiscale;
        return $this;
    }
    /**
     * Get D3_Denomination value
     * @return string|null
     */
    public function getD3_Denomination()
    {
        return $this->D3_Denomination;
    }
    /**
     * Set D3_Denomination value
     * @param string $d3_Denomination
     * @return \Misiv\StructType\Nationale
     */
    public function setD3_Denomination($d3_Denomination = null)
    {
        $this->D3_Denomination = $d3_Denomination;
        return $this;
    }
    /**
     * Get F3_MMaxAdmEns value
     * @return int|null
     */
    public function getF3_MMaxAdmEns()
    {
        return $this->F3_MMaxAdmEns;
    }
    /**
     * Set F3_MMaxAdmEns value
     * @param int $f3_MMaxAdmEns
     * @return \Misiv\StructType\Nationale
     */
    public function setF3_MMaxAdmEns($f3_MMaxAdmEns = null)
    {
        $this->F3_MMaxAdmEns = $f3_MMaxAdmEns;
        return $this;
    }
    /**
     * Get J2_CarrosserieCE value
     * @return string|null
     */
    public function getJ2_CarrosserieCE()
    {
        return $this->J2_CarrosserieCE;
    }
    /**
     * Set J2_CarrosserieCE value
     * @param string $j2_CarrosserieCE
     * @return \Misiv\StructType\Nationale
     */
    public function setJ2_CarrosserieCE($j2_CarrosserieCE = null)
    {
        $this->J2_CarrosserieCE = $j2_CarrosserieCE;
        return $this;
    }
    /**
     * Get P1_Cyl value
     * @return decimal|null
     */
    public function getP1_Cyl()
    {
        return $this->P1_Cyl;
    }
    /**
     * Set P1_Cyl value
     * @param decimal $p1_Cyl
     * @return \Misiv\StructType\Nationale
     */
    public function setP1_Cyl($p1_Cyl = null)
    {
        $this->P1_Cyl = $p1_Cyl;
        return $this;
    }
    /**
     * Get P2_PuissKW value
     * @return decimal|null
     */
    public function getP2_PuissKW()
    {
        return $this->P2_PuissKW;
    }
    /**
     * Set P2_PuissKW value
     * @param decimal $p2_PuissKW
     * @return \Misiv\StructType\Nationale
     */
    public function setP2_PuissKW($p2_PuissKW = null)
    {
        $this->P2_PuissKW = $p2_PuissKW;
        return $this;
    }
    /**
     * Get P3_Energie value
     * @return string|null
     */
    public function getP3_Energie()
    {
        return $this->P3_Energie;
    }
    /**
     * Set P3_Energie value
     * @param string $p3_Energie
     * @return \Misiv\StructType\Nationale
     */
    public function setP3_Energie($p3_Energie = null)
    {
        $this->P3_Energie = $p3_Energie;
        return $this;
    }
    /**
     * Get Q_RapportPuissMasse value
     * @return decimal|null
     */
    public function getQ_RapportPuissMasse()
    {
        return $this->Q_RapportPuissMasse;
    }
    /**
     * Set Q_RapportPuissMasse value
     * @param decimal $q_RapportPuissMasse
     * @return \Misiv\StructType\Nationale
     */
    public function setQ_RapportPuissMasse($q_RapportPuissMasse = null)
    {
        $this->Q_RapportPuissMasse = $q_RapportPuissMasse;
        return $this;
    }
    /**
     * Get S2_NbPlaceDebout value
     * @return int|null
     */
    public function getS2_NbPlaceDebout()
    {
        return $this->S2_NbPlaceDebout;
    }
    /**
     * Set S2_NbPlaceDebout value
     * @param int $s2_NbPlaceDebout
     * @return \Misiv\StructType\Nationale
     */
    public function setS2_NbPlaceDebout($s2_NbPlaceDebout = null)
    {
        $this->S2_NbPlaceDebout = $s2_NbPlaceDebout;
        return $this;
    }
    /**
     * Get U1_NiveauSonore value
     * @return int|null
     */
    public function getU1_NiveauSonore()
    {
        return $this->U1_NiveauSonore;
    }
    /**
     * Set U1_NiveauSonore value
     * @param int $u1_NiveauSonore
     * @return \Misiv\StructType\Nationale
     */
    public function setU1_NiveauSonore($u1_NiveauSonore = null)
    {
        $this->U1_NiveauSonore = $u1_NiveauSonore;
        return $this;
    }
    /**
     * Get U2_NbTours value
     * @return int|null
     */
    public function getU2_NbTours()
    {
        return $this->U2_NbTours;
    }
    /**
     * Set U2_NbTours value
     * @param int $u2_NbTours
     * @return \Misiv\StructType\Nationale
     */
    public function setU2_NbTours($u2_NbTours = null)
    {
        $this->U2_NbTours = $u2_NbTours;
        return $this;
    }
    /**
     * Get V7_Co2 value
     * @return int|null
     */
    public function getV7_Co2()
    {
        return $this->V7_Co2;
    }
    /**
     * Set V7_Co2 value
     * @param int $v7_Co2
     * @return \Misiv\StructType\Nationale
     */
    public function setV7_Co2($v7_Co2 = null)
    {
        $this->V7_Co2 = $v7_Co2;
        return $this;
    }
    /**
     * Get V9_ClasseEnvCE value
     * @return string|null
     */
    public function getV9_ClasseEnvCE()
    {
        return $this->V9_ClasseEnvCE;
    }
    /**
     * Set V9_ClasseEnvCE value
     * @param string $v9_ClasseEnvCE
     * @return \Misiv\StructType\Nationale
     */
    public function setV9_ClasseEnvCE($v9_ClasseEnvCE = null)
    {
        $this->V9_ClasseEnvCE = $v9_ClasseEnvCE;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\Nationale
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
