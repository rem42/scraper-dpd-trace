<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

/**
 * This class stands for GetLastTraceRequest StructType.
 */
#[\AllowDynamicProperties]
class GetLastTraceRequest extends GetLastTraceBaseRequest
{
    /**
     * The Parcels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfParcel $Parcels = null;

    /**
     * Constructor method for GetLastTraceRequest.
     *
     * @uses GetLastTraceRequest::setParcels()
     */
    public function __construct(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfParcel $parcels = null)
    {
        $this
            ->setParcels($parcels)
        ;
    }

    /**
     * Get Parcels value.
     */
    public function getParcels(): ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfParcel
    {
        return $this->Parcels;
    }

    /**
     * Set Parcels value.
     */
    public function setParcels(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfParcel $parcels = null): self
    {
        $this->Parcels = $parcels;

        return $this;
    }
}
