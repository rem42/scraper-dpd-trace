<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RunActionRequest StructType.
 */
#[\AllowDynamicProperties]
class RunActionRequest extends AbstractStructBase
{
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Action = null;

    /**
     * The Parameter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Parameter = null;

    /**
     * Constructor method for RunActionRequest.
     *
     * @uses RunActionRequest::setAction()
     * @uses RunActionRequest::setParameter()
     */
    public function __construct(?string $action = null, ?string $parameter = null)
    {
        $this
            ->setAction($action)
            ->setParameter($parameter)
        ;
    }

    /**
     * Get Action value.
     */
    public function getAction(): ?string
    {
        return $this->Action;
    }

    /**
     * Set Action value.
     */
    public function setAction(?string $action = null): self
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->Action = $action;

        return $this;
    }

    /**
     * Get Parameter value.
     */
    public function getParameter(): ?string
    {
        return $this->Parameter;
    }

    /**
     * Set Parameter value.
     */
    public function setParameter(?string $parameter = null): self
    {
        // validation for constraint: string
        if (!is_null($parameter) && !is_string($parameter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parameter, true), gettype($parameter)), __LINE__);
        }
        $this->Parameter = $parameter;

        return $this;
    }
}
