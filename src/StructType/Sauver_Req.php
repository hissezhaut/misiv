<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sauver_Req StructType
 * @subpackage Structs
 */
class Sauver_Req extends AbstractStructBase
{
    /**
     * The Identification
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Misiv\StructType\TypeIdentification
     */
    public $Identification;
    /**
     * The Lot
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Misiv\StructType\Lot
     */
    public $Lot;
    /**
     * Constructor method for Sauver_Req
     * @uses Sauver_Req::setIdentification()
     * @uses Sauver_Req::setLot()
     * @param \Misiv\StructType\TypeIdentification $identification
     * @param \Misiv\StructType\Lot $lot
     */
    public function __construct(\Misiv\StructType\TypeIdentification $identification = null, \Misiv\StructType\Lot $lot = null)
    {
        $this
            ->setIdentification($identification)
            ->setLot($lot);
    }
    /**
     * Get Identification value
     * @return \Misiv\StructType\TypeIdentification
     */
    public function getIdentification()
    {
        return $this->Identification;
    }
    /**
     * Set Identification value
     * @param \Misiv\StructType\TypeIdentification $identification
     * @return \Misiv\StructType\Sauver_Req
     */
    public function setIdentification(\Misiv\StructType\TypeIdentification $identification = null)
    {
        $this->Identification = $identification;
        return $this;
    }
    /**
     * Get Lot value
     * @return \Misiv\StructType\Lot|null
     */
    public function getLot()
    {
        return $this->Lot;
    }
    /**
     * Set Lot value
     * @param \Misiv\StructType\Lot $lot
     * @return \Misiv\StructType\Sauver_Req
     */
    public function setLot(\Misiv\StructType\Lot $lot = null)
    {
        $this->Lot = $lot;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\Sauver_Req
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
