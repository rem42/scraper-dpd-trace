<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfImage ArrayType.
 */
class ArrayOfImage extends AbstractStructArrayBase
{
    /**
     * The Image
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<\Scraper\ScraperDPDTrace\StructType\Image>|null
     */
    protected ?array $Image = null;

    /**
     * Constructor method for ArrayOfImage.
     *
     * @uses ArrayOfImage::setImage()
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\Image> $image
     */
    public function __construct(?array $image = null)
    {
        $this
            ->setImage($image)
        ;
    }

    /**
     * Get Image value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<\Scraper\ScraperDPDTrace\StructType\Image>|null
     */
    public function getImage(): ?array
    {
        return $this->Image ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setImage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setImage method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateImageForArrayConstraintFromSetImage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfImageImageItem) {
            // validation for constraint: itemType
            if (!$arrayOfImageImageItem instanceof \Scraper\ScraperDPDTrace\StructType\Image) {
                $invalidValues[] = is_object($arrayOfImageImageItem) ? get_class($arrayOfImageImageItem) : sprintf('%s(%s)', gettype($arrayOfImageImageItem), var_export($arrayOfImageImageItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Image property can only contain items of type \Scraper\ScraperDPDTrace\StructType\Image, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set Image value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\Image> $image
     *
     * @throws \InvalidArgumentException
     */
    public function setImage(?array $image = null): self
    {
        // validation for constraint: array
        if ('' !== ($imageArrayErrorMessage = self::validateImageForArrayConstraintFromSetImage($image))) {
            throw new \InvalidArgumentException($imageArrayErrorMessage, __LINE__);
        }

        if (is_null($image) || (is_array($image) && empty($image))) {
            unset($this->Image);
        } else {
            $this->Image = $image;
        }

        return $this;
    }

    /**
     * Returns the current element.
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPDTrace\StructType\Image
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
    public function item($index): ?\Scraper\ScraperDPDTrace\StructType\Image
    {
        return parent::item($index);
    }

    /**
     * Returns the first element.
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPDTrace\StructType\Image
    {
        return parent::first();
    }

    /**
     * Returns the last element.
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPDTrace\StructType\Image
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
    public function offsetGet($offset): ?\Scraper\ScraperDPDTrace\StructType\Image
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array.
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPDTrace\StructType\Image $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPDTrace\StructType\Image) {
            throw new \InvalidArgumentException(sprintf('The Image property can only contain items of type \Scraper\ScraperDPDTrace\StructType\Image, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    /**
     * Returns the attribute name.
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string Image
     */
    public function getAttributeName(): string
    {
        return 'Image';
    }
}
