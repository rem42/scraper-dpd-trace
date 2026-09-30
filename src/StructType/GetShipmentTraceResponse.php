<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentTraceResponse StructType.
 */
#[\AllowDynamicProperties]
class GetShipmentTraceResponse extends AbstractStructBase
{
    /**
     * The GetShipmentTraceResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfShipmentTrace $GetShipmentTraceResult = null;

    /**
     * Constructor method for GetShipmentTraceResponse.
     *
     * @uses GetShipmentTraceResponse::setGetShipmentTraceResult()
     */
    public function __construct(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfShipmentTrace $getShipmentTraceResult = null)
    {
        $this
            ->setGetShipmentTraceResult($getShipmentTraceResult)
        ;
    }

    /**
     * Get GetShipmentTraceResult value.
     */
    public function getGetShipmentTraceResult(): ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfShipmentTrace
    {
        return $this->GetShipmentTraceResult;
    }

    /**
     * Set GetShipmentTraceResult value.
     */
    public function setGetShipmentTraceResult(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfShipmentTrace $getShipmentTraceResult = null): self
    {
        $this->GetShipmentTraceResult = $getShipmentTraceResult;

        return $this;
    }
}
