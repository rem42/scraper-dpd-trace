<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfString ArrayType.
 */
class ArrayOfString extends AbstractStructArrayBase
{
    /**
     * The string
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<string>|null
     */
    protected ?array $string = null;

    /**
     * Constructor method for ArrayOfString.
     *
     * @uses ArrayOfString::setString()
     *
     * @param array<string> $string
     */
    public function __construct(?array $string = null)
    {
        $this
            ->setString($string)
        ;
    }

    /**
     * Get string value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<string>|null
     */
    public function getString(): ?array
    {
        return $this->string ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setString method
     * This method is willingly generated in order to preserve the one-line inline validation within the setString method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStringForArrayConstraintFromSetString(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfStringStringItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfStringStringItem)) {
                $invalidValues[] = is_object($arrayOfStringStringItem) ? get_class($arrayOfStringStringItem) : sprintf('%s(%s)', gettype($arrayOfStringStringItem), var_export($arrayOfStringStringItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The string property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set string value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<string> $string
     *
     * @throws \InvalidArgumentException
     */
    public function setString(?array $string = null): self
    {
        // validation for constraint: array
        if ('' !== ($stringArrayErrorMessage = self::validateStringForArrayConstraintFromSetString($string))) {
            throw new \InvalidArgumentException($stringArrayErrorMessage, __LINE__);
        }

        if (is_null($string) || (is_array($string) && empty($string))) {
            unset($this->string);
        } else {
            $this->string = $string;
        }

        return $this;
    }

    /**
     * Returns the current element.
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?string
    {
        return parent::current();
    }

    /**
     * Returns the indexed element.
     *
     * @see AbstractStructArrayBase::item()
     *
     * @param int $index
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }

    /**
     * Returns the first element.
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?string
    {
        return parent::first();
    }

    /**
     * Returns the last element.
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?string
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset.
     *
     * @see AbstractStructArrayBase::offsetGet()
     *
     * @param int $offset
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }

    /**
     * Returns the attribute name.
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string string
     */
    public function getAttributeName(): string
    {
        return 'string';
    }
}
