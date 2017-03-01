<?php

namespace Misiv\EnumType;

/**
 * This class stands for MotifFUD EnumType
 * @subpackage Enumerations
 */
class MotifFUD
{
    /**
     * Constant for value 'VENTE'
     * @return string 'VENTE'
     */
    const VALUE_VENTE = 'VENTE';
    /**
     * Constant for value 'AFFECTATION'
     * @return string 'AFFECTATION'
     */
    const VALUE_AFFECTATION = 'AFFECTATION';
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
     * @uses self::VALUE_VENTE
     * @uses self::VALUE_AFFECTATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VENTE,
            self::VALUE_AFFECTATION,
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
