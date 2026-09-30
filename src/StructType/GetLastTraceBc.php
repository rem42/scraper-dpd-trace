<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastTraceBc StructType.
 */
#[\AllowDynamicProperties]
class GetLastTraceBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?GetLastTraceBcRequest $request = null;

    /**
     * Constructor method for GetLastTraceBc.
     *
     * @uses GetLastTraceBc::setRequest()
     */
    public function __construct(?GetLastTraceBcRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value.
     */
    public function getRequest(): ?GetLastTraceBcRequest
    {
        return $this->request;
    }

    /**
     * Set request value.
     */
    public function setRequest(?GetLastTraceBcRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
