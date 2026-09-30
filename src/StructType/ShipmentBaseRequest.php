<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

/**
 * This class stands for ShipmentBaseRequest StructType.
 */
#[\AllowDynamicProperties]
class ShipmentBaseRequest extends RequestShipmentBase
{
    /**
     * The ShipmentNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $ShipmentNumber = null;

    /**
     * Constructor method for ShipmentBaseRequest.
     *
     * @uses ShipmentBaseRequest::setShipmentNumber()
     */
    public function __construct(?string $shipmentNumber = null)
    {
        $this
            ->setShipmentNumber($shipmentNumber)
        ;
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
