<?php

namespace Misiv\EnumType;

/**
 * This class stands for ModeExp EnumType
 * @subpackage Enumerations
 */
class ModeExp
{
    /**
     * Constant for value '0'
     * @return string '0'
     */
    const VALUE_0 = '0';
    /**
     * Constant for value '1'
     * @return string '1'
     */
    const VALUE_1 = '1';
    /**
     * Constant for value '2'
     * @return string '2'
     */
    const VALUE_2 = '2';
    /**
     * Constant for value '3'
     * @return string '3'
     */
    const VALUE_3 = '3';
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
     * @uses self::VALUE_0
     * @uses self::VALUE_1
     * @uses self::VALUE_2
     * @uses self::VALUE_3
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_0,
            self::VALUE_1,
            self::VALUE_2,
            self::VALUE_3,
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
