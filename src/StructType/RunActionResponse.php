<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for runActionResponse StructType.
 */
#[\AllowDynamicProperties]
class RunActionResponse extends AbstractStructBase
{
    /**
     * The runActionResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?RunActionResponse_1 $runActionResult = null;

    /**
     * Constructor method for runActionResponse.
     *
     * @uses RunActionResponse::setRunActionResult()
     */
    public function __construct(?RunActionResponse_1 $runActionResult = null)
    {
        $this
            ->setRunActionResult($runActionResult)
        ;
    }

    /**
     * Get runActionResult value.
     */
    public function getRunActionResult(): ?RunActionResponse_1
    {
        return $this->runActionResult;
    }

    /**
     * Set runActionResult value.
     */
    public function setRunActionResult(?RunActionResponse_1 $runActionResult = null): self
    {
        $this->runActionResult = $runActionResult;

        return $this;
    }
}
