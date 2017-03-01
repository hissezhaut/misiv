<?php

namespace Misiv\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Envoyer ServiceType
 * @subpackage Services
 */
class Envoyer extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Envoyer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Misiv\StructType\Envoyer_Req $envoyerRepMsg
     * @return \Misiv\StructType\Envoyer_Rep|bool
     */
    public function Envoyer(\Misiv\StructType\Envoyer_Req $envoyerRepMsg)
    {
        try {
            $this->setResult(self::getSoapClient()->Envoyer($envoyerRepMsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Misiv\StructType\Envoyer_Rep
     */
    public function getResult()
    {
        return parent::getResult();
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
