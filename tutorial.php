<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://webtrace.dpd.fr/trace-service/Webtrace_Service.asmx?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://webtrace.dpd.fr/trace-service/Webtrace_Service.asmx?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Scraper\ScraperDPDTrace\ClassMap::get(),
];
/**
 * Samples for Is ServiceType
 */
$is = new \Scraper\ScraperDPDTrace\ServiceType\Is($options);
/**
 * Sample call for isAlive operation/method
 */
if ($is->isAlive(new \Scraper\ScraperDPDTrace\StructType\IsAlive()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \Scraper\ScraperDPDTrace\ServiceType\Set($options);
$set->setSoapHeaderUserCredentials(new \Scraper\ScraperDPDTrace\StructType\UserCredentials());
/**
 * Sample call for setAlive operation/method
 */
if ($set->setAlive(new \Scraper\ScraperDPDTrace\StructType\SetAlive()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Verify ServiceType
 */
$verify = new \Scraper\ScraperDPDTrace\ServiceType\Verify($options);
$verify->setSoapHeaderVerifyUserCredentials(new \Scraper\ScraperDPDTrace\StructType\VerifyUserCredentials());
/**
 * Sample call for VerifyConfiguration operation/method
 */
if ($verify->VerifyConfiguration(new \Scraper\ScraperDPDTrace\StructType\VerifyConfiguration()) !== false) {
    print_r($verify->getResult());
} else {
    print_r($verify->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Scraper\ScraperDPDTrace\ServiceType\Get($options);
$get->setSoapHeaderUserCredentials(new \Scraper\ScraperDPDTrace\StructType\UserCredentials());
/**
 * Sample call for getInfo operation/method
 */
if ($get->getInfo(new \Scraper\ScraperDPDTrace\StructType\GetInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentTraceSingle operation/method
 */
if ($get->GetShipmentTraceSingle(new \Scraper\ScraperDPDTrace\StructType\GetShipmentTraceSingle()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentTrace operation/method
 */
if ($get->GetShipmentTrace(new \Scraper\ScraperDPDTrace\StructType\GetShipmentTrace()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentTraceByReference operation/method
 */
if ($get->GetShipmentTraceByReference(new \Scraper\ScraperDPDTrace\StructType\GetShipmentTraceByReference()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLastTrace operation/method
 */
if ($get->GetLastTrace(new \Scraper\ScraperDPDTrace\StructType\GetLastTrace()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLastTraceBc operation/method
 */
if ($get->GetLastTraceBc(new \Scraper\ScraperDPDTrace\StructType\GetLastTraceBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Run ServiceType
 */
$run = new \Scraper\ScraperDPDTrace\ServiceType\Run($options);
$run->setSoapHeaderUserCredentials(new \Scraper\ScraperDPDTrace\StructType\UserCredentials());
/**
 * Sample call for runAction operation/method
 */
if ($run->runAction(new \Scraper\ScraperDPDTrace\StructType\RunAction()) !== false) {
    print_r($run->getResult());
} else {
    print_r($run->getLastError());
}
