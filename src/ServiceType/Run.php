<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Run ServiceType.
 */
class Run extends AbstractSoapClientBase
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
     * Method to call the operation originally named runAction
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
     * @return \Scraper\ScraperDPDTrace\StructType\RunActionResponse|bool
     */
    public function runAction(\Scraper\ScraperDPDTrace\StructType\RunAction $parameters)
    {
        try {
            $this->setResult($resultRunAction = $this->getSoapClient()->__soapCall('runAction', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultRunAction;
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
     * @return \Scraper\ScraperDPDTrace\StructType\RunActionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
