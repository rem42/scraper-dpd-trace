<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isAliveResponse StructType.
 */
#[\AllowDynamicProperties]
class IsAliveResponse extends AbstractStructBase
{
    /**
     * The isAliveResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected bool $isAliveResult;

    /**
     * Constructor method for isAliveResponse.
     *
     * @uses IsAliveResponse::setIsAliveResult()
     */
    public function __construct(bool $isAliveResult)
    {
        $this
            ->setIsAliveResult($isAliveResult)
        ;
    }

    /**
     * Get isAliveResult value.
     */
    public function getIsAliveResult(): bool
    {
        return $this->isAliveResult;
    }

    /**
     * Set isAliveResult value.
     */
    public function setIsAliveResult(bool $isAliveResult): self
    {
        // validation for constraint: boolean
        if (!is_null($isAliveResult) && !is_bool($isAliveResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAliveResult, true), gettype($isAliveResult)), __LINE__);
        }
        $this->isAliveResult = $isAliveResult;

        return $this;
    }
}
