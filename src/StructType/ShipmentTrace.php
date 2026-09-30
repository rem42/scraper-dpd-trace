<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

/**
 * This class stands for ShipmentTrace StructType.
 */
#[\AllowDynamicProperties]
class ShipmentTrace extends ClsShipmentTraceBase
{
    /**
     * The images
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfImage $images = null;

    /**
     * Constructor method for ShipmentTrace.
     *
     * @uses ShipmentTrace::setImages()
     */
    public function __construct(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfImage $images = null)
    {
        $this
            ->setImages($images)
        ;
    }

    /**
     * Get images value.
     */
    public function getImages(): ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfImage
    {
        return $this->images;
    }

    /**
     * Set images value.
     */
    public function setImages(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfImage $images = null): self
    {
        $this->images = $images;

        return $this;
    }
}
