<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentTraceSingleResponse StructType.
 */
#[\AllowDynamicProperties]
class GetShipmentTraceSingleResponse extends AbstractStructBase
{
    /**
     * The GetShipmentTraceSingleResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?ShipmentTrace $GetShipmentTraceSingleResult = null;

    /**
     * Constructor method for GetShipmentTraceSingleResponse.
     *
     * @uses GetShipmentTraceSingleResponse::setGetShipmentTraceSingleResult()
     */
    public function __construct(?ShipmentTrace $getShipmentTraceSingleResult = null)
    {
        $this
            ->setGetShipmentTraceSingleResult($getShipmentTraceSingleResult)
        ;
    }

    /**
     * Get GetShipmentTraceSingleResult value.
     */
    public function getGetShipmentTraceSingleResult(): ?ShipmentTrace
    {
        return $this->GetShipmentTraceSingleResult;
    }

    /**
     * Set GetShipmentTraceSingleResult value.
     */
    public function setGetShipmentTraceSingleResult(?ShipmentTrace $getShipmentTraceSingleResult = null): self
    {
        $this->GetShipmentTraceSingleResult = $getShipmentTraceSingleResult;

        return $this;
    }
}
