<?php

namespace Misiv\EnumType;

/**
 * This class stands for TypeCanal EnumType
 * @subpackage Enumerations
 */
class TypeCanal
{
    /**
     * Constant for value 'PRESAISIE'
     * @return string 'PRESAISIE'
     */
    const VALUE_PRESAISIE = 'PRESAISIE';
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
     * @uses self::VALUE_PRESAISIE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRESAISIE,
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
