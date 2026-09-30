<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for setAlive StructType.
 */
#[\AllowDynamicProperties]
class SetAlive extends AbstractStructBase
{
    /**
     * The value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected bool $value;

    /**
     * Constructor method for setAlive.
     *
     * @uses SetAlive::setValue()
     */
    public function __construct(bool $value)
    {
        $this
            ->setValue($value)
        ;
    }

    /**
     * Get value value.
     */
    public function getValue(): bool
    {
        return $this->value;
    }

    /**
     * Set value value.
     */
    public function setValue(bool $value): self
    {
        // validation for constraint: boolean
        if (!is_null($value) && !is_bool($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;

        return $this;
    }
}
