<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerSmall StructType.
 */
#[\AllowDynamicProperties]
class CustomerSmall extends AbstractStructBase
{
    /**
     * The centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected int $centernumber;

    /**
     * The number
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected int $number;

    /**
     * Constructor method for CustomerSmall.
     *
     * @uses CustomerSmall::setCenternumber()
     * @uses CustomerSmall::setNumber()
     */
    public function __construct(int $centernumber, int $number)
    {
        $this
            ->setCenternumber($centernumber)
            ->setNumber($number)
        ;
    }

    /**
     * Get centernumber value.
     */
    public function getCenternumber(): int
    {
        return $this->centernumber;
    }

    /**
     * Set centernumber value.
     */
    public function setCenternumber(int $centernumber): self
    {
        // validation for constraint: int
        if (!is_null($centernumber) && !(is_int($centernumber) || ctype_digit($centernumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($centernumber, true), gettype($centernumber)), __LINE__);
        }
        $this->centernumber = $centernumber;

        return $this;
    }

    /**
     * Get number value.
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * Set number value.
     */
    public function setNumber(int $number): self
    {
        // validation for constraint: int
        if (!is_null($number) && !(is_int($number) || ctype_digit($number))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;

        return $this;
    }
}
