<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestBase StructType.
 */
#[\AllowDynamicProperties]
class RequestBase extends AbstractStructBase
{
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?Customer $Customer = null;

    /**
     * The Language
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Language = null;

    /**
     * Constructor method for RequestBase.
     *
     * @uses RequestBase::setCustomer()
     * @uses RequestBase::setLanguage()
     */
    public function __construct(?Customer $customer = null, ?string $language = null)
    {
        $this
            ->setCustomer($customer)
            ->setLanguage($language)
        ;
    }

    /**
     * Get Customer value.
     */
    public function getCustomer(): ?Customer
    {
        return $this->Customer;
    }

    /**
     * Set Customer value.
     */
    public function setCustomer(?Customer $customer = null): self
    {
        $this->Customer = $customer;

        return $this;
    }

    /**
     * Get Language value.
     */
    public function getLanguage(): ?string
    {
        return $this->Language;
    }

    /**
     * Set Language value.
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->Language = $language;

        return $this;
    }
}
