<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

/**
 * This class stands for Customer StructType.
 */
#[\AllowDynamicProperties]
class Customer extends CustomerSmall
{
    /**
     * The countrycode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected int $countrycode;

    /**
     * Constructor method for Customer.
     *
     * @uses Customer::setCountrycode()
     */
    public function __construct(int $countrycode)
    {
        $this
            ->setCountrycode($countrycode)
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
}
