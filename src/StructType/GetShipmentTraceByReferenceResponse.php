<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentTraceByReferenceResponse StructType.
 */
#[\AllowDynamicProperties]
class GetShipmentTraceByReferenceResponse extends AbstractStructBase
{
    /**
     * The GetShipmentTraceByReferenceResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfShipmentTrace $GetShipmentTraceByReferenceResult = null;

    /**
     * Constructor method for GetShipmentTraceByReferenceResponse.
     *
     * @uses GetShipmentTraceByReferenceResponse::setGetShipmentTraceByReferenceResult()
     */
    public function __construct(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfShipmentTrace $getShipmentTraceByReferenceResult = null)
    {
        $this
            ->setGetShipmentTraceByReferenceResult($getShipmentTraceByReferenceResult)
        ;
    }

    /**
     * Get GetShipmentTraceByReferenceResult value.
     */
    public function getGetShipmentTraceByReferenceResult(): ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfShipmentTrace
    {
        return $this->GetShipmentTraceByReferenceResult;
    }

    /**
     * Set GetShipmentTraceByReferenceResult value.
     */
    public function setGetShipmentTraceByReferenceResult(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfShipmentTrace $getShipmentTraceByReferenceResult = null): self
    {
        $this->GetShipmentTraceByReferenceResult = $getShipmentTraceByReferenceResult;

        return $this;
    }
}
