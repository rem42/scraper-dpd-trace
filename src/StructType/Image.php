<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Image StructType.
 */
#[\AllowDynamicProperties]
class Image extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected string $type;

    /**
     * The image
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $image = null;

    /**
     * The date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $date = null;

    /**
     * The time
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $time = null;

    /**
     * Constructor method for Image.
     *
     * @uses Image::setType()
     * @uses Image::setImage()
     * @uses Image::setDate()
     * @uses Image::setTime()
     */
    public function __construct(string $type, ?string $image = null, ?string $date = null, ?string $time = null)
    {
        $this
            ->setType($type)
            ->setImage($image)
            ->setDate($date)
            ->setTime($time)
        ;
    }

    /**
     * Get type value.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set type value.
     *
     * @uses \Scraper\ScraperDPDTrace\EnumType\ImageType::valueIsValid()
     * @uses \Scraper\ScraperDPDTrace\EnumType\ImageType::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPDTrace\EnumType\ImageType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPDTrace\EnumType\ImageType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPDTrace\EnumType\ImageType::getValidValues())), __LINE__);
        }
        $this->type = $type;

        return $this;
    }

    /**
     * Get image value.
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * Set image value.
     */
    public function setImage(?string $image = null): self
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($image, true), gettype($image)), __LINE__);
        }
        $this->image = $image;

        return $this;
    }

    /**
     * Get date value.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Set date value.
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->date = $date;

        return $this;
    }

    /**
     * Get time value.
     */
    public function getTime(): ?string
    {
        return $this->time;
    }

    /**
     * Set time value.
     */
    public function setTime(?string $time = null): self
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->time = $time;

        return $this;
    }
}
