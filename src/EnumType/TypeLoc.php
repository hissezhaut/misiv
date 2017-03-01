<?php

namespace Misiv\EnumType;

/**
 * This class stands for TypeLoc EnumType
 * @subpackage Enumerations
 */
class TypeLoc
{
    /**
     * Constant for value 'LCD'
     * @return string 'LCD'
     */
    const VALUE_LCD = 'LCD';
    /**
     * Constant for value 'LLD'
     * @return string 'LLD'
     */
    const VALUE_LLD = 'LLD';
    /**
     * Constant for value 'LCL'
     * @return string 'LCL'
     */
    const VALUE_LCL = 'LCL';
    /**
     * Constant for value 'LCB'
     * @return string 'LCB'
     */
    const VALUE_LCB = 'LCB';
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
     * @uses self::VALUE_LCD
     * @uses self::VALUE_LLD
     * @uses self::VALUE_LCL
     * @uses self::VALUE_LCB
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LCD,
            self::VALUE_LLD,
            self::VALUE_LCL,
            self::VALUE_LCB,
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
