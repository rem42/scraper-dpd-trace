<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType.
 */
class Set extends AbstractSoapClientBase
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
     * Method to call the operation originally named setAlive
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
     * @return \Scraper\ScraperDPDTrace\StructType\SetAliveResponse|bool
     */
    public function setAlive(\Scraper\ScraperDPDTrace\StructType\SetAlive $parameters)
    {
        try {
            $this->setResult($resultSetAlive = $this->getSoapClient()->__soapCall('setAlive', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultSetAlive;
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
     * @return \Scraper\ScraperDPDTrace\StructType\SetAliveResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
