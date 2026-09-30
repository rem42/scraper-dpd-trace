<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastTraceBaseResponse StructType.
 */
#[\AllowDynamicProperties]
class GetLastTraceBaseResponse extends AbstractStructBase
{
    /**
     * The Trace
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?ClsTrace $Trace = null;

    /**
     * Constructor method for GetLastTraceBaseResponse.
     *
     * @uses GetLastTraceBaseResponse::setTrace()
     */
    public function __construct(?ClsTrace $trace = null)
    {
        $this
            ->setTrace($trace)
        ;
    }

    /**
     * Get Trace value.
     */
    public function getTrace(): ?ClsTrace
    {
        return $this->Trace;
    }

    /**
     * Set Trace value.
     */
    public function setTrace(?ClsTrace $trace = null): self
    {
        $this->Trace = $trace;

        return $this;
    }
}
