<?php

namespace Misiv\EnumType;

/**
 * This class stands for Z1_Mention1 EnumType
 * @subpackage Enumerations
 */
class Z1_Mention1
{
    /**
     * Constant for value 'DEM'
     * @return string 'DEM'
     */
    const VALUE_DEM = 'DEM';
    /**
     * Constant for value 'TT'
     * @return string 'TT'
     */
    const VALUE_TT = 'TT';
    /**
     * Constant for value 'AGR'
     * @return string 'AGR'
     */
    const VALUE_AGR = 'AGR';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_DEM
     * @uses self::VALUE_TT
     * @uses self::VALUE_AGR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEM,
            self::VALUE_TT,
            self::VALUE_AGR,
        );
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
