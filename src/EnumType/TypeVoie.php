<?php

namespace Misiv\EnumType;

/**
 * This class stands for TypeVoie EnumType
 * @subpackage Enumerations
 */
class TypeVoie
{
    /**
     * Constant for value 'RUE'
     * @return string 'RUE'
     */
    const VALUE_RUE = 'RUE';
    /**
     * Constant for value 'BLVD'
     * @return string 'BLVD'
     */
    const VALUE_BLVD = 'BLVD';
    /**
     * Constant for value 'AVN'
     * @return string 'AVN'
     */
    const VALUE_AVN = 'AVN';
    /**
     * Constant for value 'ALL'
     * @return string 'ALL'
     */
    const VALUE_ALL = 'ALL';
    /**
     * Constant for value 'PLC'
     * @return string 'PLC'
     */
    const VALUE_PLC = 'PLC';
    /**
     * Constant for value 'IMP'
     * @return string 'IMP'
     */
    const VALUE_IMP = 'IMP';
    /**
     * Constant for value 'CHM'
     * @return string 'CHM'
     */
    const VALUE_CHM = 'CHM';
    /**
     * Constant for value 'QUAI'
     * @return string 'QUAI'
     */
    const VALUE_QUAI = 'QUAI';
    /**
     * Constant for value 'FORT'
     * @return string 'FORT'
     */
    const VALUE_FORT = 'FORT';
    /**
     * Constant for value 'RTE'
     * @return string 'RTE'
     */
    const VALUE_RTE = 'RTE';
    /**
     * Constant for value 'PASS'
     * @return string 'PASS'
     */
    const VALUE_PASS = 'PASS';
    /**
     * Constant for value 'CHAU'
     * @return string 'CHAU'
     */
    const VALUE_CHAU = 'CHAU';
    /**
     * Constant for value 'COUR'
     * @return string 'COUR'
     */
    const VALUE_COUR = 'COUR';
    /**
     * Constant for value 'PARC'
     * @return string 'PARC'
     */
    const VALUE_PARC = 'PARC';
    /**
     * Constant for value 'FBG'
     * @return string 'FBG'
     */
    const VALUE_FBG = 'FBG';
    /**
     * Constant for value 'LDIT'
     * @return string 'LDIT'
     */
    const VALUE_LDIT = 'LDIT';
    /**
     * Constant for value 'SQUA'
     * @return string 'SQUA'
     */
    const VALUE_SQUA = 'SQUA';
    /**
     * Constant for value 'SENT'
     * @return string 'SENT'
     */
    const VALUE_SENT = 'SENT';
    /**
     * Constant for value 'SANS'
     * @return string 'SANS'
     */
    const VALUE_SANS = 'SANS';
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
     * @uses self::VALUE_RUE
     * @uses self::VALUE_BLVD
     * @uses self::VALUE_AVN
     * @uses self::VALUE_ALL
     * @uses self::VALUE_PLC
     * @uses self::VALUE_IMP
     * @uses self::VALUE_CHM
     * @uses self::VALUE_QUAI
     * @uses self::VALUE_FORT
     * @uses self::VALUE_RTE
     * @uses self::VALUE_PASS
     * @uses self::VALUE_CHAU
     * @uses self::VALUE_COUR
     * @uses self::VALUE_PARC
     * @uses self::VALUE_FBG
     * @uses self::VALUE_LDIT
     * @uses self::VALUE_SQUA
     * @uses self::VALUE_SENT
     * @uses self::VALUE_SANS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RUE,
            self::VALUE_BLVD,
            self::VALUE_AVN,
            self::VALUE_ALL,
            self::VALUE_PLC,
            self::VALUE_IMP,
            self::VALUE_CHM,
            self::VALUE_QUAI,
            self::VALUE_FORT,
            self::VALUE_RTE,
            self::VALUE_PASS,
            self::VALUE_CHAU,
            self::VALUE_COUR,
            self::VALUE_PARC,
            self::VALUE_FBG,
            self::VALUE_LDIT,
            self::VALUE_SQUA,
            self::VALUE_SENT,
            self::VALUE_SANS,
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
