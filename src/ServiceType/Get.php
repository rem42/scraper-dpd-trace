<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType.
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the UserCredentials SoapHeader param.
     *
     * @uses AbstractSoapClientBase::setSoapHeader()
     */
    public function setSoapHeaderUserCredentials(\Scraper\ScraperDPDTrace\StructType\UserCredentials $userCredentials, string $namespace = 'http://www.cargonet.software/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'UserCredentials', $userCredentials, $mustUnderstand, $actor);
    }

    /**
     * Method to call the operation originally named getInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software/
     * - SOAPHeaderTypes: \Scraper\ScraperDPDTrace\StructType\UserCredentials
     * - SOAPHeaders: required.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPDTrace\StructType\GetInfoResponse|bool
     */
    public function getInfo(\Scraper\ScraperDPDTrace\StructType\GetInfo $parameters)
    {
        try {
            $this->setResult($resultGetInfo = $this->getSoapClient()->__soapCall('getInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetInfo;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetShipmentTraceSingle
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software/
     * - SOAPHeaderTypes: \Scraper\ScraperDPDTrace\StructType\UserCredentials
     * - SOAPHeaders: required.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPDTrace\StructType\GetShipmentTraceSingleResponse|bool
     */
    public function GetShipmentTraceSingle(\Scraper\ScraperDPDTrace\StructType\GetShipmentTraceSingle $parameters)
    {
        try {
            $this->setResult($resultGetShipmentTraceSingle = $this->getSoapClient()->__soapCall('GetShipmentTraceSingle', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetShipmentTraceSingle;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetShipmentTrace
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software/
     * - SOAPHeaderTypes: \Scraper\ScraperDPDTrace\StructType\UserCredentials
     * - SOAPHeaders: required.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPDTrace\StructType\GetShipmentTraceResponse|bool
     */
    public function GetShipmentTrace(\Scraper\ScraperDPDTrace\StructType\GetShipmentTrace $parameters)
    {
        try {
            $this->setResult($resultGetShipmentTrace = $this->getSoapClient()->__soapCall('GetShipmentTrace', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetShipmentTrace;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetShipmentTraceByReference
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software/
     * - SOAPHeaderTypes: \Scraper\ScraperDPDTrace\StructType\UserCredentials
     * - SOAPHeaders: required.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPDTrace\StructType\GetShipmentTraceByReferenceResponse|bool
     */
    public function GetShipmentTraceByReference(\Scraper\ScraperDPDTrace\StructType\GetShipmentTraceByReference $parameters)
    {
        try {
            $this->setResult($resultGetShipmentTraceByReference = $this->getSoapClient()->__soapCall('GetShipmentTraceByReference', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetShipmentTraceByReference;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetLastTrace
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software/
     * - SOAPHeaderTypes: \Scraper\ScraperDPDTrace\StructType\UserCredentials
     * - SOAPHeaders: required.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse|bool
     */
    public function GetLastTrace(\Scraper\ScraperDPDTrace\StructType\GetLastTrace $parameters)
    {
        try {
            $this->setResult($resultGetLastTrace = $this->getSoapClient()->__soapCall('GetLastTrace', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLastTrace;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetLastTraceBc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software/
     * - SOAPHeaderTypes: \Scraper\ScraperDPDTrace\StructType\UserCredentials
     * - SOAPHeaders: required.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse|bool
     */
    public function GetLastTraceBc(\Scraper\ScraperDPDTrace\StructType\GetLastTraceBc $parameters)
    {
        try {
            $this->setResult($resultGetLastTraceBc = $this->getSoapClient()->__soapCall('GetLastTraceBc', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLastTraceBc;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result.
     *
     * @see AbstractSoapClientBase::getResult()
     *
     * @return \Scraper\ScraperDPDTrace\StructType\GetInfoResponse|\Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse|\Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse|\Scraper\ScraperDPDTrace\StructType\GetShipmentTraceByReferenceResponse|\Scraper\ScraperDPDTrace\StructType\GetShipmentTraceResponse|\Scraper\ScraperDPDTrace\StructType\GetShipmentTraceSingleResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
