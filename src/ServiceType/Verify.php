<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Verify ServiceType.
 */
class Verify extends AbstractSoapClientBase
{
    /**
     * Sets the VerifyUserCredentials SoapHeader param.
     *
     * @uses AbstractSoapClientBase::setSoapHeader()
     */
    public function setSoapHeaderVerifyUserCredentials(\Scraper\ScraperDPDTrace\StructType\VerifyUserCredentials $verifyUserCredentials, string $namespace = 'http://www.cargonet.software/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'VerifyUserCredentials', $verifyUserCredentials, $mustUnderstand, $actor);
    }

    /**
     * Method to call the operation originally named VerifyConfiguration
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: VerifyUserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software/
     * - SOAPHeaderTypes: \Scraper\ScraperDPDTrace\StructType\VerifyUserCredentials
     * - SOAPHeaders: required.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPDTrace\StructType\VerifyConfigurationResponse|bool
     */
    public function VerifyConfiguration(\Scraper\ScraperDPDTrace\StructType\VerifyConfiguration $parameters)
    {
        try {
            $this->setResult($resultVerifyConfiguration = $this->getSoapClient()->__soapCall('VerifyConfiguration', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultVerifyConfiguration;
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
     * @return \Scraper\ScraperDPDTrace\StructType\VerifyConfigurationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
