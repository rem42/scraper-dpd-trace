<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RunActionResponse StructType.
 */
#[\AllowDynamicProperties]
class RunActionResponse_1 extends AbstractStructBase
{
    /**
     * The Response
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Response = null;

    /**
     * Constructor method for RunActionResponse.
     *
     * @uses RunActionResponse_1::setResponse()
     */
    public function __construct(?string $response = null)
    {
        $this
            ->setResponse($response)
        ;
    }

    /**
     * Get Response value.
     */
    public function getResponse(): ?string
    {
        return $this->Response;
    }

    /**
     * Set Response value.
     */
    public function setResponse(?string $response = null): self
    {
        // validation for constraint: string
        if (!is_null($response) && !is_string($response)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($response, true), gettype($response)), __LINE__);
        }
        $this->Response = $response;

        return $this;
    }
}
