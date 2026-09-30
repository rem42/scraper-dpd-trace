<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentTraceSingle StructType.
 */
#[\AllowDynamicProperties]
class GetShipmentTraceSingle extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?ShipmentDetailRequest $request = null;

    /**
     * Constructor method for GetShipmentTraceSingle.
     *
     * @uses GetShipmentTraceSingle::setRequest()
     */
    public function __construct(?ShipmentDetailRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value.
     */
    public function getRequest(): ?ShipmentDetailRequest
    {
        return $this->request;
    }

    /**
     * Set request value.
     */
    public function setRequest(?ShipmentDetailRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
