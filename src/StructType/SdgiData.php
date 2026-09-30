<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SdgiData StructType.
 */
#[\AllowDynamicProperties]
class SdgiData extends AbstractStructBase
{
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $StartDate = null;

    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $EndDate = null;

    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $StartTime = null;

    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $EndTime = null;

    /**
     * Constructor method for SdgiData.
     *
     * @uses SdgiData::setStartDate()
     * @uses SdgiData::setEndDate()
     * @uses SdgiData::setStartTime()
     * @uses SdgiData::setEndTime()
     */
    public function __construct(?string $startDate = null, ?string $endDate = null, ?string $startTime = null, ?string $endTime = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
        ;
    }

    /**
     * Get StartDate value.
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate;
    }

    /**
     * Set StartDate value.
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;

        return $this;
    }

    /**
     * Get EndDate value.
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate;
    }

    /**
     * Set EndDate value.
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;

        return $this;
    }

    /**
     * Get StartTime value.
     */
    public function getStartTime(): ?string
    {
        return $this->StartTime;
    }

    /**
     * Set StartTime value.
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;

        return $this;
    }

    /**
     * Get EndTime value.
     */
    public function getEndTime(): ?string
    {
        return $this->EndTime;
    }

    /**
     * Set EndTime value.
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;

        return $this;
    }
}
