<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentTraceByReference StructType.
 */
#[\AllowDynamicProperties]
class GetShipmentTraceByReference extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?ReferenceDetailRequest $request = null;

    /**
     * Constructor method for GetShipmentTraceByReference.
     *
     * @uses GetShipmentTraceByReference::setRequest()
     */
    public function __construct(?ReferenceDetailRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value.
     */
    public function getRequest(): ?ReferenceDetailRequest
    {
        return $this->request;
    }

    /**
     * Set request value.
     */
    public function setRequest(?ReferenceDetailRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
