<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for runAction StructType.
 */
#[\AllowDynamicProperties]
class RunAction extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?RunActionRequest $request = null;

    /**
     * Constructor method for runAction.
     *
     * @uses RunAction::setRequest()
     */
    public function __construct(?RunActionRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value.
     */
    public function getRequest(): ?RunActionRequest
    {
        return $this->request;
    }

    /**
     * Set request value.
     */
    public function setRequest(?RunActionRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
