<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getInfoResponse StructType.
 */
#[\AllowDynamicProperties]
class GetInfoResponse extends AbstractStructBase
{
    /**
     * The getInfoResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $getInfoResult = null;

    /**
     * Constructor method for getInfoResponse.
     *
     * @uses GetInfoResponse::setGetInfoResult()
     */
    public function __construct(?string $getInfoResult = null)
    {
        $this
            ->setGetInfoResult($getInfoResult)
        ;
    }

    /**
     * Get getInfoResult value.
     */
    public function getGetInfoResult(): ?string
    {
        return $this->getInfoResult;
    }

    /**
     * Set getInfoResult value.
     */
    public function setGetInfoResult(?string $getInfoResult = null): self
    {
        // validation for constraint: string
        if (!is_null($getInfoResult) && !is_string($getInfoResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getInfoResult, true), gettype($getInfoResult)), __LINE__);
        }
        $this->getInfoResult = $getInfoResult;

        return $this;
    }
}
