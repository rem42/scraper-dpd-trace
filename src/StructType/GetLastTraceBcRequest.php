<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

/**
 * This class stands for GetLastTraceBcRequest StructType.
 */
#[\AllowDynamicProperties]
class GetLastTraceBcRequest extends GetLastTraceBaseRequest
{
    /**
     * The Parcels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfString $Parcels = null;

    /**
     * Constructor method for GetLastTraceBcRequest.
     *
     * @uses GetLastTraceBcRequest::setParcels()
     */
    public function __construct(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfString $parcels = null)
    {
        $this
            ->setParcels($parcels)
        ;
    }

    /**
     * Get Parcels value.
     */
    public function getParcels(): ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfString
    {
        return $this->Parcels;
    }

    /**
     * Set Parcels value.
     */
    public function setParcels(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfString $parcels = null): self
    {
        $this->Parcels = $parcels;

        return $this;
    }
}
