<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfParcel ArrayType.
 */
class ArrayOfParcel extends AbstractStructArrayBase
{
    /**
     * The Parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<\Scraper\ScraperDPDTrace\StructType\Parcel>|null
     */
    protected ?array $Parcel = null;

    /**
     * Constructor method for ArrayOfParcel.
     *
     * @uses ArrayOfParcel::setParcel()
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\Parcel> $parcel
     */
    public function __construct(?array $parcel = null)
    {
        $this
            ->setParcel($parcel)
        ;
    }

    /**
     * Get Parcel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<\Scraper\ScraperDPDTrace\StructType\Parcel>|null
     */
    public function getParcel(): ?array
    {
        return $this->Parcel ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setParcel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcel method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelForArrayConstraintFromSetParcel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfParcelParcelItem) {
            // validation for constraint: itemType
            if (!$arrayOfParcelParcelItem instanceof \Scraper\ScraperDPDTrace\StructType\Parcel) {
                $invalidValues[] = is_object($arrayOfParcelParcelItem) ? get_class($arrayOfParcelParcelItem) : sprintf('%s(%s)', gettype($arrayOfParcelParcelItem), var_export($arrayOfParcelParcelItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Parcel property can only contain items of type \Scraper\ScraperDPDTrace\StructType\Parcel, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set Parcel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\Parcel> $parcel
     *
     * @throws \InvalidArgumentException
     */
    public function setParcel(?array $parcel = null): self
    {
        // validation for constraint: array
        if ('' !== ($parcelArrayErrorMessage = self::validateParcelForArrayConstraintFromSetParcel($parcel))) {
            throw new \InvalidArgumentException($parcelArrayErrorMessage, __LINE__);
        }

        if (is_null($parcel) || (is_array($parcel) && empty($parcel))) {
            unset($this->Parcel);
        } else {
            $this->Parcel = $parcel;
        }

        return $this;
    }

    /**
     * Returns the current element.
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPDTrace\StructType\Parcel
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
    public function item($index): ?\Scraper\ScraperDPDTrace\StructType\Parcel
    {
        return parent::item($index);
    }

    /**
     * Returns the first element.
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPDTrace\StructType\Parcel
    {
        return parent::first();
    }

    /**
     * Returns the last element.
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPDTrace\StructType\Parcel
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
    public function offsetGet($offset): ?\Scraper\ScraperDPDTrace\StructType\Parcel
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array.
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPDTrace\StructType\Parcel $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPDTrace\StructType\Parcel) {
            throw new \InvalidArgumentException(sprintf('The Parcel property can only contain items of type \Scraper\ScraperDPDTrace\StructType\Parcel, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    /**
     * Returns the attribute name.
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string Parcel
     */
    public function getAttributeName(): string
    {
        return 'Parcel';
    }
}
