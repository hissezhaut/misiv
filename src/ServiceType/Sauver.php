<?php

namespace Misiv\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Sauver ServiceType
 * @subpackage Services
 */
class Sauver extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Sauver
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Misiv\StructType\Sauver_Req $sauverRepMsg
     * @return \Misiv\StructType\Sauver_Rep|bool
     */
    public function Sauver(\Misiv\StructType\Sauver_Req $sauverRepMsg)
    {
        try {
            $this->setResult(self::getSoapClient()->Sauver($sauverRepMsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Misiv\StructType\Sauver_Rep
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
