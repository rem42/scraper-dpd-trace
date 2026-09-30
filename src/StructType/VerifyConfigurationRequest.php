<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyConfigurationRequest StructType.
 */
#[\AllowDynamicProperties]
class VerifyConfigurationRequest extends AbstractStructBase
{
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?Customer $customer = null;

    /**
     * The ip
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $ip = null;

    /**
     * Constructor method for VerifyConfigurationRequest.
     *
     * @uses VerifyConfigurationRequest::setCustomer()
     * @uses VerifyConfigurationRequest::setIp()
     */
    public function __construct(?Customer $customer = null, ?string $ip = null)
    {
        $this
            ->setCustomer($customer)
            ->setIp($ip)
        ;
    }

    /**
     * Get customer value.
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    /**
     * Set customer value.
     */
    public function setCustomer(?Customer $customer = null): self
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get ip value.
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * Set ip value.
     */
    public function setIp(?string $ip = null): self
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ip, true), gettype($ip)), __LINE__);
        }
        $this->ip = $ip;

        return $this;
    }
}
