<?php

namespace Misiv\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Info ServiceType
 * @subpackage Services
 */
class Info extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named InfoImmat
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Misiv\StructType\InfoImmat_Req $infoImmatRepMsg
     * @return \Misiv\StructType\InfoImmat_Rep|bool
     */
    public function InfoImmat(\Misiv\StructType\InfoImmat_Req $infoImmatRepMsg)
    {
        try {
            $this->setResult(self::getSoapClient()->InfoImmat($infoImmatRepMsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Misiv\StructType\InfoImmat_Rep
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
