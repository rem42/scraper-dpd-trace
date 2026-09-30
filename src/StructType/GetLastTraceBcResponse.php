<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

/**
 * This class stands for GetLastTraceBcResponse StructType.
 */
#[\AllowDynamicProperties]
class GetLastTraceBcResponse extends GetLastTraceBaseResponse
{
    /**
     * The GetLastTraceBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfGetLastTraceBcResponse $GetLastTraceBcResult = null;

    /**
     * The ShipmentNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $ShipmentNumber = null;

    /**
     * Constructor method for GetLastTraceBcResponse.
     *
     * @uses GetLastTraceBcResponse::setGetLastTraceBcResult()
     * @uses GetLastTraceBcResponse::setShipmentNumber()
     */
    public function __construct(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfGetLastTraceBcResponse $getLastTraceBcResult = null, ?string $shipmentNumber = null)
    {
        $this
            ->setGetLastTraceBcResult($getLastTraceBcResult)
            ->setShipmentNumber($shipmentNumber)
        ;
    }

    /**
     * Get GetLastTraceBcResult value.
     */
    public function getGetLastTraceBcResult(): ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfGetLastTraceBcResponse
    {
        return $this->GetLastTraceBcResult;
    }

    /**
     * Set GetLastTraceBcResult value.
     */
    public function setGetLastTraceBcResult(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfGetLastTraceBcResponse $getLastTraceBcResult = null): self
    {
        $this->GetLastTraceBcResult = $getLastTraceBcResult;

        return $this;
    }

    /**
     * Get ShipmentNumber value.
     */
    public function getShipmentNumber(): ?string
    {
        return $this->ShipmentNumber;
    }

    /**
     * Set ShipmentNumber value.
     */
    public function setShipmentNumber(?string $shipmentNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($shipmentNumber) && !is_string($shipmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentNumber, true), gettype($shipmentNumber)), __LINE__);
        }
        $this->ShipmentNumber = $shipmentNumber;

        return $this;
    }
}
