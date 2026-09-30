<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

/**
 * This class stands for ReferenceBaseRequest StructType.
 */
#[\AllowDynamicProperties]
class ReferenceBaseRequest extends RequestBase
{
    /**
     * The Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Reference = null;

    /**
     * The ShippingDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $ShippingDate = null;

    /**
     * Constructor method for ReferenceBaseRequest.
     *
     * @uses ReferenceBaseRequest::setReference()
     * @uses ReferenceBaseRequest::setShippingDate()
     */
    public function __construct(?string $reference = null, ?string $shippingDate = null)
    {
        $this
            ->setReference($reference)
            ->setShippingDate($shippingDate)
        ;
    }

    /**
     * Get Reference value.
     */
    public function getReference(): ?string
    {
        return $this->Reference;
    }

    /**
     * Set Reference value.
     */
    public function setReference(?string $reference = null): self
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        $this->Reference = $reference;

        return $this;
    }

    /**
     * Get ShippingDate value.
     */
    public function getShippingDate(): ?string
    {
        return $this->ShippingDate;
    }

    /**
     * Set ShippingDate value.
     */
    public function setShippingDate(?string $shippingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingDate) && !is_string($shippingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDate, true), gettype($shippingDate)), __LINE__);
        }
        $this->ShippingDate = $shippingDate;

        return $this;
    }
}
