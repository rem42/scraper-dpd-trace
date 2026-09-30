<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClsTraceDetails ArrayType.
 */
class ArrayOfClsTraceDetails extends AbstractStructArrayBase
{
    /**
     * The clsTraceDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<\Scraper\ScraperDPDTrace\StructType\ClsTraceDetails>|null
     */
    protected ?array $clsTraceDetails = null;

    /**
     * Constructor method for ArrayOfClsTraceDetails.
     *
     * @uses ArrayOfClsTraceDetails::setClsTraceDetails()
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\ClsTraceDetails> $clsTraceDetails
     */
    public function __construct(?array $clsTraceDetails = null)
    {
        $this
            ->setClsTraceDetails($clsTraceDetails)
        ;
    }

    /**
     * Get clsTraceDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<\Scraper\ScraperDPDTrace\StructType\ClsTraceDetails>|null
     */
    public function getClsTraceDetails(): ?array
    {
        return $this->clsTraceDetails ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setClsTraceDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClsTraceDetails method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClsTraceDetailsForArrayConstraintFromSetClsTraceDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfClsTraceDetailsClsTraceDetailsItem) {
            // validation for constraint: itemType
            if (!$arrayOfClsTraceDetailsClsTraceDetailsItem instanceof \Scraper\ScraperDPDTrace\StructType\ClsTraceDetails) {
                $invalidValues[] = is_object($arrayOfClsTraceDetailsClsTraceDetailsItem) ? get_class($arrayOfClsTraceDetailsClsTraceDetailsItem) : sprintf('%s(%s)', gettype($arrayOfClsTraceDetailsClsTraceDetailsItem), var_export($arrayOfClsTraceDetailsClsTraceDetailsItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The clsTraceDetails property can only contain items of type \Scraper\ScraperDPDTrace\StructType\ClsTraceDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set clsTraceDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\ClsTraceDetails> $clsTraceDetails
     *
     * @throws \InvalidArgumentException
     */
    public function setClsTraceDetails(?array $clsTraceDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($clsTraceDetailsArrayErrorMessage = self::validateClsTraceDetailsForArrayConstraintFromSetClsTraceDetails($clsTraceDetails))) {
            throw new \InvalidArgumentException($clsTraceDetailsArrayErrorMessage, __LINE__);
        }

        if (is_null($clsTraceDetails) || (is_array($clsTraceDetails) && empty($clsTraceDetails))) {
            unset($this->clsTraceDetails);
        } else {
            $this->clsTraceDetails = $clsTraceDetails;
        }

        return $this;
    }

    /**
     * Returns the current element.
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPDTrace\StructType\ClsTraceDetails
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
    public function item($index): ?\Scraper\ScraperDPDTrace\StructType\ClsTraceDetails
    {
        return parent::item($index);
    }

    /**
     * Returns the first element.
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPDTrace\StructType\ClsTraceDetails
    {
        return parent::first();
    }

    /**
     * Returns the last element.
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPDTrace\StructType\ClsTraceDetails
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
    public function offsetGet($offset): ?\Scraper\ScraperDPDTrace\StructType\ClsTraceDetails
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array.
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPDTrace\StructType\ClsTraceDetails $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPDTrace\StructType\ClsTraceDetails) {
            throw new \InvalidArgumentException(sprintf('The clsTraceDetails property can only contain items of type \Scraper\ScraperDPDTrace\StructType\ClsTraceDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    /**
     * Returns the attribute name.
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string clsTraceDetails
     */
    public function getAttributeName(): string
    {
        return 'clsTraceDetails';
    }
}
