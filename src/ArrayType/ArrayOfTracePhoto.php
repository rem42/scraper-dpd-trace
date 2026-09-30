<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTracePhoto ArrayType.
 */
class ArrayOfTracePhoto extends AbstractStructArrayBase
{
    /**
     * The TracePhoto
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<\Scraper\ScraperDPDTrace\StructType\TracePhoto>|null
     */
    protected ?array $TracePhoto = null;

    /**
     * Constructor method for ArrayOfTracePhoto.
     *
     * @uses ArrayOfTracePhoto::setTracePhoto()
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\TracePhoto> $tracePhoto
     */
    public function __construct(?array $tracePhoto = null)
    {
        $this
            ->setTracePhoto($tracePhoto)
        ;
    }

    /**
     * Get TracePhoto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<\Scraper\ScraperDPDTrace\StructType\TracePhoto>|null
     */
    public function getTracePhoto(): ?array
    {
        return $this->TracePhoto ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setTracePhoto method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTracePhoto method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTracePhotoForArrayConstraintFromSetTracePhoto(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfTracePhotoTracePhotoItem) {
            // validation for constraint: itemType
            if (!$arrayOfTracePhotoTracePhotoItem instanceof \Scraper\ScraperDPDTrace\StructType\TracePhoto) {
                $invalidValues[] = is_object($arrayOfTracePhotoTracePhotoItem) ? get_class($arrayOfTracePhotoTracePhotoItem) : sprintf('%s(%s)', gettype($arrayOfTracePhotoTracePhotoItem), var_export($arrayOfTracePhotoTracePhotoItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The TracePhoto property can only contain items of type \Scraper\ScraperDPDTrace\StructType\TracePhoto, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set TracePhoto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\TracePhoto> $tracePhoto
     *
     * @throws \InvalidArgumentException
     */
    public function setTracePhoto(?array $tracePhoto = null): self
    {
        // validation for constraint: array
        if ('' !== ($tracePhotoArrayErrorMessage = self::validateTracePhotoForArrayConstraintFromSetTracePhoto($tracePhoto))) {
            throw new \InvalidArgumentException($tracePhotoArrayErrorMessage, __LINE__);
        }

        if (is_null($tracePhoto) || (is_array($tracePhoto) && empty($tracePhoto))) {
            unset($this->TracePhoto);
        } else {
            $this->TracePhoto = $tracePhoto;
        }

        return $this;
    }

    /**
     * Returns the current element.
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPDTrace\StructType\TracePhoto
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
    public function item($index): ?\Scraper\ScraperDPDTrace\StructType\TracePhoto
    {
        return parent::item($index);
    }

    /**
     * Returns the first element.
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPDTrace\StructType\TracePhoto
    {
        return parent::first();
    }

    /**
     * Returns the last element.
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPDTrace\StructType\TracePhoto
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
    public function offsetGet($offset): ?\Scraper\ScraperDPDTrace\StructType\TracePhoto
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array.
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPDTrace\StructType\TracePhoto $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPDTrace\StructType\TracePhoto) {
            throw new \InvalidArgumentException(sprintf('The TracePhoto property can only contain items of type \Scraper\ScraperDPDTrace\StructType\TracePhoto, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    /**
     * Returns the attribute name.
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string TracePhoto
     */
    public function getAttributeName(): string
    {
        return 'TracePhoto';
    }
}
