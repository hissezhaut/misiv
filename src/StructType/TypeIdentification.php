<?php

namespace Misiv\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeIdentification StructType
 * @subpackage Structs
 */
class TypeIdentification extends AbstractStructBase
{
    /**
     * The CodeTMS
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CodeTMS;
    /**
     * The Login
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Login;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Password;
    /**
     * The ApiKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ApiKey;
    /**
     * The Succursale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Succursale;
    /**
     * Constructor method for TypeIdentification
     * @uses TypeIdentification::setCodeTMS()
     * @uses TypeIdentification::setLogin()
     * @uses TypeIdentification::setPassword()
     * @uses TypeIdentification::setApiKey()
     * @uses TypeIdentification::setSuccursale()
     * @param string $codeTMS
     * @param string $login
     * @param string $password
     * @param string $apiKey
     * @param string $succursale
     */
    public function __construct($codeTMS = null, $login = null, $password = null, $apiKey = null, $succursale = null)
    {
        $this
            ->setCodeTMS($codeTMS)
            ->setLogin($login)
            ->setPassword($password)
            ->setApiKey($apiKey)
            ->setSuccursale($succursale);
    }
    /**
     * Get CodeTMS value
     * @return string
     */
    public function getCodeTMS()
    {
        return $this->CodeTMS;
    }
    /**
     * Set CodeTMS value
     * @param string $codeTMS
     * @return \Misiv\StructType\TypeIdentification
     */
    public function setCodeTMS($codeTMS = null)
    {
        $this->CodeTMS = $codeTMS;
        return $this;
    }
    /**
     * Get Login value
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }
    /**
     * Set Login value
     * @param string $login
     * @return \Misiv\StructType\TypeIdentification
     */
    public function setLogin($login = null)
    {
        $this->Login = $login;
        return $this;
    }
    /**
     * Get Password value
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \Misiv\StructType\TypeIdentification
     */
    public function setPassword($password = null)
    {
        $this->Password = $password;
        return $this;
    }
    /**
     * Get ApiKey value
     * @return string
     */
    public function getApiKey()
    {
        return $this->ApiKey;
    }
    /**
     * Set ApiKey value
     * @param string $apiKey
     * @return \Misiv\StructType\TypeIdentification
     */
    public function setApiKey($apiKey = null)
    {
        $this->ApiKey = $apiKey;
        return $this;
    }
    /**
     * Get Succursale value
     * @return string|null
     */
    public function getSuccursale()
    {
        return $this->Succursale;
    }
    /**
     * Set Succursale value
     * @param string $succursale
     * @return \Misiv\StructType\TypeIdentification
     */
    public function setSuccursale($succursale = null)
    {
        $this->Succursale = $succursale;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Misiv\StructType\TypeIdentification
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
