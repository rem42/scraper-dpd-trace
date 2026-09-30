<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExceptionNote StructType.
 */
#[\AllowDynamicProperties]
class ExceptionNote extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Type = null;

    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Text = null;

    /**
     * Constructor method for ExceptionNote.
     *
     * @uses ExceptionNote::setType()
     * @uses ExceptionNote::setText()
     */
    public function __construct(?string $type = null, ?string $text = null)
    {
        $this
            ->setType($type)
            ->setText($text)
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
     * Get Text value.
     */
    public function getText(): ?string
    {
        return $this->Text;
    }

    /**
     * Set Text value.
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->Text = $text;

        return $this;
    }
}
