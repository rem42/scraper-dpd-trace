<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for clsTraceDetails StructType.
 */
#[\AllowDynamicProperties]
class ClsTraceDetails extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $ID = null;

    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Text = null;

    /**
     * The Data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Data = null;

    /**
     * Constructor method for clsTraceDetails.
     *
     * @uses ClsTraceDetails::setID()
     * @uses ClsTraceDetails::setText()
     * @uses ClsTraceDetails::setData()
     */
    public function __construct(?string $iD = null, ?string $text = null, ?string $data = null)
    {
        $this
            ->setID($iD)
            ->setText($text)
            ->setData($data)
        ;
    }

    /**
     * Get ID value.
     */
    public function getID(): ?string
    {
        return $this->ID;
    }

    /**
     * Set ID value.
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;

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

    /**
     * Get Data value.
     */
    public function getData(): ?string
    {
        return $this->Data;
    }

    /**
     * Set Data value.
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->Data = $data;

        return $this;
    }
}
