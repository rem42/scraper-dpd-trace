<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Parcel StructType.
 */
#[\AllowDynamicProperties]
class Parcel extends AbstractStructBase
{
    /**
     * The countrycode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected int $countrycode;

    /**
     * The centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected int $centernumber;

    /**
     * The parcelnumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected int $parcelnumber;

    /**
     * Constructor method for Parcel.
     *
     * @uses Parcel::setCountrycode()
     * @uses Parcel::setCenternumber()
     * @uses Parcel::setParcelnumber()
     */
    public function __construct(int $countrycode, int $centernumber, int $parcelnumber)
    {
        $this
            ->setCountrycode($countrycode)
            ->setCenternumber($centernumber)
            ->setParcelnumber($parcelnumber)
        ;
    }

    /**
     * Get countrycode value.
     */
    public function getCountrycode(): int
    {
        return $this->countrycode;
    }

    /**
     * Set countrycode value.
     */
    public function setCountrycode(int $countrycode): self
    {
        // validation for constraint: int
        if (!is_null($countrycode) && !(is_int($countrycode) || ctype_digit($countrycode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countrycode, true), gettype($countrycode)), __LINE__);
        }
        $this->countrycode = $countrycode;

        return $this;
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
     * Get parcelnumber value.
     */
    public function getParcelnumber(): int
    {
        return $this->parcelnumber;
    }

    /**
     * Set parcelnumber value.
     */
    public function setParcelnumber(int $parcelnumber): self
    {
        // validation for constraint: int
        if (!is_null($parcelnumber) && !(is_int($parcelnumber) || ctype_digit($parcelnumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parcelnumber, true), gettype($parcelnumber)), __LINE__);
        }
        $this->parcelnumber = $parcelnumber;

        return $this;
    }
}
