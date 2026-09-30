<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TracePhoto StructType.
 */
#[\AllowDynamicProperties]
class TracePhoto extends AbstractStructBase
{
    /**
     * The Image
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Image = null;

    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Type = null;

    /**
     * Constructor method for TracePhoto.
     *
     * @uses TracePhoto::setImage()
     * @uses TracePhoto::setType()
     */
    public function __construct(?string $image = null, ?string $type = null)
    {
        $this
            ->setImage($image)
            ->setType($type)
        ;
    }

    /**
     * Get Image value.
     */
    public function getImage(): ?string
    {
        return $this->Image;
    }

    /**
     * Set Image value.
     */
    public function setImage(?string $image = null): self
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($image, true), gettype($image)), __LINE__);
        }
        $this->Image = $image;

        return $this;
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
}
