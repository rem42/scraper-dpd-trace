<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserCredentials StructType
 * Meta information extracted from the WSDL
 * - type: tns:UserCredentials.
 */
#[\AllowDynamicProperties]
class UserCredentials extends AbstractStructBase
{
    /**
     * The userid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $userid = null;

    /**
     * The password
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $password = null;

    /**
     * Constructor method for UserCredentials.
     *
     * @uses UserCredentials::setUserid()
     * @uses UserCredentials::setPassword()
     */
    public function __construct(?string $userid = null, ?string $password = null)
    {
        $this
            ->setUserid($userid)
            ->setPassword($password)
        ;
    }

    /**
     * Get userid value.
     */
    public function getUserid(): ?string
    {
        return $this->userid;
    }

    /**
     * Set userid value.
     */
    public function setUserid(?string $userid = null): self
    {
        // validation for constraint: string
        if (!is_null($userid) && !is_string($userid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userid, true), gettype($userid)), __LINE__);
        }
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get password value.
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Set password value.
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;

        return $this;
    }
}
