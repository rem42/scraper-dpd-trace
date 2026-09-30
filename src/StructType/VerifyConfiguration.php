<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyConfiguration StructType.
 */
#[\AllowDynamicProperties]
class VerifyConfiguration extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?VerifyConfigurationRequest $request = null;

    /**
     * Constructor method for VerifyConfiguration.
     *
     * @uses VerifyConfiguration::setRequest()
     */
    public function __construct(?VerifyConfigurationRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value.
     */
    public function getRequest(): ?VerifyConfigurationRequest
    {
        return $this->request;
    }

    /**
     * Set request value.
     */
    public function setRequest(?VerifyConfigurationRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
