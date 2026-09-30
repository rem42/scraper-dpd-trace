<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyConfigurationResponse StructType.
 */
#[\AllowDynamicProperties]
class VerifyConfigurationResponse extends AbstractStructBase
{
    /**
     * The Allowed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected bool $Allowed;

    /**
     * The VerifyConfigurationResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?VerifyConfigurationResponse $VerifyConfigurationResult = null;

    /**
     * Constructor method for VerifyConfigurationResponse.
     *
     * @uses VerifyConfigurationResponse::setAllowed()
     * @uses VerifyConfigurationResponse::setVerifyConfigurationResult()
     */
    public function __construct(bool $allowed, ?VerifyConfigurationResponse $verifyConfigurationResult = null)
    {
        $this
            ->setAllowed($allowed)
            ->setVerifyConfigurationResult($verifyConfigurationResult)
        ;
    }

    /**
     * Get Allowed value.
     */
    public function getAllowed(): bool
    {
        return $this->Allowed;
    }

    /**
     * Set Allowed value.
     */
    public function setAllowed(bool $allowed): self
    {
        // validation for constraint: boolean
        if (!is_null($allowed) && !is_bool($allowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowed, true), gettype($allowed)), __LINE__);
        }
        $this->Allowed = $allowed;

        return $this;
    }

    /**
     * Get VerifyConfigurationResult value.
     */
    public function getVerifyConfigurationResult(): ?VerifyConfigurationResponse
    {
        return $this->VerifyConfigurationResult;
    }

    /**
     * Set VerifyConfigurationResult value.
     */
    public function setVerifyConfigurationResult(?VerifyConfigurationResponse $verifyConfigurationResult = null): self
    {
        $this->VerifyConfigurationResult = $verifyConfigurationResult;

        return $this;
    }
}
