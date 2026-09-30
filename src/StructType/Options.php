<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Options StructType.
 */
#[\AllowDynamicProperties]
class Options extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Type = null;

    /**
     * The CenterType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $CenterType = null;

    /**
     * Constructor method for Options.
     *
     * @uses Options::setType()
     * @uses Options::setCenterType()
     */
    public function __construct(?string $type = null, ?string $centerType = null)
    {
        $this
            ->setType($type)
            ->setCenterType($centerType)
        ;
    }

    /**
     * Get Type value.
     */
    public function getType(): ?string
    {
        return $this->Type;
    }

    /**
     * Set Type value.
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;

        return $this;
    }

    /**
     * Get CenterType value.
     */
    public function getCenterType(): ?string
    {
        return $this->CenterType;
    }

    /**
     * Set CenterType value.
     */
    public function setCenterType(?string $centerType = null): self
    {
        // validation for constraint: string
        if (!is_null($centerType) && !is_string($centerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($centerType, true), gettype($centerType)), __LINE__);
        }
        $this->CenterType = $centerType;

        return $this;
    }
}
