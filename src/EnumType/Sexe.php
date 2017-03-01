<?php

namespace Misiv\EnumType;

/**
 * This class stands for Sexe EnumType
 * @subpackage Enumerations
 */
class Sexe
{
    /**
     * Constant for value 'M'
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Constant for value 'F'
     * @return string 'F'
     */
    const VALUE_F = 'F';
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
     * @uses self::VALUE_M
     * @uses self::VALUE_F
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_M,
            self::VALUE_F,
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
