<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceInfo StructType.
 */
#[\AllowDynamicProperties]
class ServiceInfo extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected int $Type;

    /**
     * The Attribute
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true.
     */
    protected ?int $Attribute = null;

    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Name = null;

    /**
     * Constructor method for ServiceInfo.
     *
     * @uses ServiceInfo::setType()
     * @uses ServiceInfo::setAttribute()
     * @uses ServiceInfo::setName()
     */
    public function __construct(int $type, ?int $attribute = null, ?string $name = null)
    {
        $this
            ->setType($type)
            ->setAttribute($attribute)
            ->setName($name)
        ;
    }

    /**
     * Get Type value.
     */
    public function getType(): int
    {
        return $this->Type;
    }

    /**
     * Set Type value.
     */
    public function setType(int $type): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Attribute value.
     */
    public function getAttribute(): ?int
    {
        return $this->Attribute;
    }

    /**
     * Set Attribute value.
     */
    public function setAttribute(?int $attribute = null): self
    {
        // validation for constraint: int
        if (!is_null($attribute) && !(is_int($attribute) || ctype_digit($attribute))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attribute, true), gettype($attribute)), __LINE__);
        }
        $this->Attribute = $attribute;

        return $this;
    }

    /**
     * Get Name value.
     */
    public function getName(): ?string
    {
        return $this->Name;
    }

    /**
     * Set Name value.
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;

        return $this;
    }
}
