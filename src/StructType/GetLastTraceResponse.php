<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

/**
 * This class stands for GetLastTraceResponse StructType.
 */
#[\AllowDynamicProperties]
class GetLastTraceResponse extends GetLastTraceBaseResponse
{
    /**
     * The GetLastTraceResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfGetLastTraceResponse $GetLastTraceResult = null;

    /**
     * The Parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?Parcel $Parcel = null;

    /**
     * Constructor method for GetLastTraceResponse.
     *
     * @uses GetLastTraceResponse::setGetLastTraceResult()
     * @uses GetLastTraceResponse::setParcel()
     */
    public function __construct(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfGetLastTraceResponse $getLastTraceResult = null, ?Parcel $parcel = null)
    {
        $this
            ->setGetLastTraceResult($getLastTraceResult)
            ->setParcel($parcel)
        ;
    }

    /**
     * Get GetLastTraceResult value.
     */
    public function getGetLastTraceResult(): ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfGetLastTraceResponse
    {
        return $this->GetLastTraceResult;
    }

    /**
     * Set GetLastTraceResult value.
     */
    public function setGetLastTraceResult(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfGetLastTraceResponse $getLastTraceResult = null): self
    {
        $this->GetLastTraceResult = $getLastTraceResult;

        return $this;
    }

    /**
     * Get Parcel value.
     */
    public function getParcel(): ?Parcel
    {
        return $this->Parcel;
    }

    /**
     * Set Parcel value.
     */
    public function setParcel(?Parcel $parcel = null): self
    {
        $this->Parcel = $parcel;

        return $this;
    }
}
