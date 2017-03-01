<?php

namespace Misiv\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Ouvrir ServiceType
 * @subpackage Services
 */
class Ouvrir extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Ouvrir
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Misiv\StructType\Ouvrir_Req $ouvrirRepMsg
     * @return \Misiv\StructType\Ouvrir_Rep|bool
     */
    public function Ouvrir(\Misiv\StructType\Ouvrir_Req $ouvrirRepMsg)
    {
        try {
            $this->setResult(self::getSoapClient()->Ouvrir($ouvrirRepMsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Misiv\StructType\Ouvrir_Rep
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
