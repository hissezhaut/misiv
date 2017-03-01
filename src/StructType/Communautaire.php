<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Communautaire StructType
 * @subpackage Structs
 */
class Communautaire extends AbstractStructBase
{
    /**
     * The K_NumRecepCE
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $K_NumRecepCE;
    /**
     * The DateReception
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - maxLength: 19
     * - pattern: [0-9]{2}/[0-9]{2}/[0-9]{4}(\s([01][0-9]|2[0123])(:[0-5][0-9]){1,2})?
     * @var string
     */
    public $DateReception;
    /**
     * The D21_CNIT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $D21_CNIT;
    /**
     * The DerivVP
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $DerivVP;
    /**
     * Constructor method for Communautaire
     * @uses Communautaire::setK_NumRecepCE()
     * @uses Communautaire::setDateReception()
     * @uses Communautaire::setD21_CNIT()
     * @uses Communautaire::setDerivVP()
     * @param string $k_NumRecepCE
     * @param string $dateReception
     * @param string $d21_CNIT
     * @param boolean $derivVP
     */
    public function __construct($k_NumRecepCE = null, $dateReception = null, $d21_CNIT = null, $derivVP = null)
    {
        $this
            ->setK_NumRecepCE($k_NumRecepCE)
            ->setDateReception($dateReception)
            ->setD21_CNIT($d21_CNIT)
            ->setDerivVP($derivVP);
    }
    /**
     * Get K_NumRecepCE value
     * @return string
     */
    public function getK_NumRecepCE()
    {
        return $this->K_NumRecepCE;
    }
    /**
     * Set K_NumRecepCE value
     * @param string $k_NumRecepCE
     * @return \Misiv\StructType\Communautaire
     */
    public function setK_NumRecepCE($k_NumRecepCE = null)
    {
        $this->K_NumRecepCE = $k_NumRecepCE;
        return $this;
    }
    /**
     * Get DateReception value
     * @return string|null
     */
    public function getDateReception()
    {
        return $this->DateReception;
    }
    /**
     * Set DateReception value
     * @param string $dateReception
     * @return \Misiv\StructType\Communautaire
     */
    public function setDateReception($dateReception = null)
    {
        $this->DateReception = $dateReception;
        return $this;
    }
    /**
     * Get D21_CNIT value
     * @return string|null
     */
    public function getD21_CNIT()
    {
        return $this->D21_CNIT;
    }
    /**
     * Set D21_CNIT value
     * @param string $d21_CNIT
     * @return \Misiv\StructType\Communautaire
     */
    public function setD21_CNIT($d21_CNIT = null)
    {
        $this->D21_CNIT = $d21_CNIT;
        return $this;
    }
    /**
     * Get DerivVP value
     * @return boolean|null
     */
    public function getDerivVP()
    {
        return $this->DerivVP;
    }
    /**
     * Set DerivVP value
     * @param boolean $derivVP
     * @return \Misiv\StructType\Communautaire
     */
    public function setDerivVP($derivVP = null)
    {
        $this->DerivVP = $derivVP;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\Communautaire
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
