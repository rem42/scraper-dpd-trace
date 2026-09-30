<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Is ServiceType.
 */
class Is extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named isAlive.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPDTrace\StructType\IsAliveResponse|bool
     */
    public function isAlive(\Scraper\ScraperDPDTrace\StructType\IsAlive $parameters)
    {
        try {
            $this->setResult($resultIsAlive = $this->getSoapClient()->__soapCall('isAlive', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultIsAlive;
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
     * @return \Scraper\ScraperDPDTrace\StructType\IsAliveResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
