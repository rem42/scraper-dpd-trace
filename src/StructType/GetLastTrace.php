<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastTrace StructType.
 */
#[\AllowDynamicProperties]
class GetLastTrace extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?GetLastTraceRequest $request = null;

    /**
     * Constructor method for GetLastTrace.
     *
     * @uses GetLastTrace::setRequest()
     */
    public function __construct(?GetLastTraceRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value.
     */
    public function getRequest(): ?GetLastTraceRequest
    {
        return $this->request;
    }

    /**
     * Set request value.
     */
    public function setRequest(?GetLastTraceRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
