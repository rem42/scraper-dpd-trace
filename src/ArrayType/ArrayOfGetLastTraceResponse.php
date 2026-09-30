<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGetLastTraceResponse ArrayType.
 */
class ArrayOfGetLastTraceResponse extends AbstractStructArrayBase
{
    /**
     * The GetLastTraceResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<\Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse>|null
     */
    protected ?array $GetLastTraceResponse = null;

    /**
     * Constructor method for ArrayOfGetLastTraceResponse.
     *
     * @uses ArrayOfGetLastTraceResponse::setGetLastTraceResponse()
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse> $getLastTraceResponse
     */
    public function __construct(?array $getLastTraceResponse = null)
    {
        $this
            ->setGetLastTraceResponse($getLastTraceResponse)
        ;
    }

    /**
     * Get GetLastTraceResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<\Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse>|null
     */
    public function getGetLastTraceResponse(): ?array
    {
        return $this->GetLastTraceResponse ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setGetLastTraceResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetLastTraceResponse method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetLastTraceResponseForArrayConstraintFromSetGetLastTraceResponse(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfGetLastTraceResponseGetLastTraceResponseItem) {
            // validation for constraint: itemType
            if (!$arrayOfGetLastTraceResponseGetLastTraceResponseItem instanceof \Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse) {
                $invalidValues[] = is_object($arrayOfGetLastTraceResponseGetLastTraceResponseItem) ? get_class($arrayOfGetLastTraceResponseGetLastTraceResponseItem) : sprintf('%s(%s)', gettype($arrayOfGetLastTraceResponseGetLastTraceResponseItem), var_export($arrayOfGetLastTraceResponseGetLastTraceResponseItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The GetLastTraceResponse property can only contain items of type \Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set GetLastTraceResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse> $getLastTraceResponse
     *
     * @throws \InvalidArgumentException
     */
    public function setGetLastTraceResponse(?array $getLastTraceResponse = null): self
    {
        // validation for constraint: array
        if ('' !== ($getLastTraceResponseArrayErrorMessage = self::validateGetLastTraceResponseForArrayConstraintFromSetGetLastTraceResponse($getLastTraceResponse))) {
            throw new \InvalidArgumentException($getLastTraceResponseArrayErrorMessage, __LINE__);
        }

        if (is_null($getLastTraceResponse) || (is_array($getLastTraceResponse) && empty($getLastTraceResponse))) {
            unset($this->GetLastTraceResponse);
        } else {
            $this->GetLastTraceResponse = $getLastTraceResponse;
        }

        return $this;
    }

    /**
     * Returns the current element.
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse
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
    public function item($index): ?\Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse
    {
        return parent::item($index);
    }

    /**
     * Returns the first element.
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse
    {
        return parent::first();
    }

    /**
     * Returns the last element.
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse
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
    public function offsetGet($offset): ?\Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array.
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse) {
            throw new \InvalidArgumentException(sprintf('The GetLastTraceResponse property can only contain items of type \Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    /**
     * Returns the attribute name.
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string GetLastTraceResponse
     */
    public function getAttributeName(): string
    {
        return 'GetLastTraceResponse';
    }
}
