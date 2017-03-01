<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://test.misiv.intra.misiv.fr/wsdl/ws_interface.php?CodeTMS=29-001535&Login=hissezhaut&Password=hissezhaut&ApiKey=519541d33a922466b5885375e3554bc229fb2fd84c3b987e58b0d3bbf9024a19',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://test.misiv.intra.misiv.fr/wsdl/ws_interface.php?CodeTMS=29-001535&Login=hissezhaut&Password=hissezhaut&ApiKey=519541d33a922466b5885375e3554bc229fb2fd84c3b987e58b0d3bbf9024a19',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Misiv\ClassMap::get(),
);
/**
 * Samples for Info ServiceType
 */
$info = new \Misiv\ServiceType\Info($options);
/**
 * Sample call for InfoImmat operation/method
 */
if ($info->InfoImmat(new \Misiv\StructType\InfoImmat_Req()) !== false) {
    print_r($info->getResult());
} else {
    print_r($info->getLastError());
}
/**
 * Samples for Chercher ServiceType
 */
$chercher = new \Misiv\ServiceType\Chercher($options);
/**
 * Sample call for Chercher operation/method
 */
if ($chercher->Chercher(new \Misiv\StructType\Chercher_Req()) !== false) {
    print_r($chercher->getResult());
} else {
    print_r($chercher->getLastError());
}
/**
 * Samples for Ouvrir ServiceType
 */
$ouvrir = new \Misiv\ServiceType\Ouvrir($options);
/**
 * Sample call for Ouvrir operation/method
 */
if ($ouvrir->Ouvrir(new \Misiv\StructType\Ouvrir_Req()) !== false) {
    print_r($ouvrir->getResult());
} else {
    print_r($ouvrir->getLastError());
}
/**
 * Samples for Sauver ServiceType
 */
$sauver = new \Misiv\ServiceType\Sauver($options);
/**
 * Sample call for Sauver operation/method
 */
if ($sauver->Sauver(new \Misiv\StructType\Sauver_Req()) !== false) {
    print_r($sauver->getResult());
} else {
    print_r($sauver->getLastError());
}
/**
 * Samples for Envoyer ServiceType
 */
$envoyer = new \Misiv\ServiceType\Envoyer($options);
/**
 * Sample call for Envoyer operation/method
 */
if ($envoyer->Envoyer(new \Misiv\StructType\Envoyer_Req()) !== false) {
    print_r($envoyer->getResult());
} else {
    print_r($envoyer->getLastError());
}
