<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

/**
 * This class stands for VerifyUserCredentials StructType
 * Meta information extracted from the WSDL
 * - type: tns:VerifyUserCredentials.
 */
#[\AllowDynamicProperties]
class VerifyUserCredentials extends UserCredentials
{
    /**
     * The Verify_userid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Verify_userid = null;

    /**
     * The Verify_password
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Verify_password = null;

    /**
     * Constructor method for VerifyUserCredentials.
     *
     * @uses VerifyUserCredentials::setVerify_userid()
     * @uses VerifyUserCredentials::setVerify_password()
     */
    public function __construct(?string $verify_userid = null, ?string $verify_password = null)
    {
        $this
            ->setVerify_userid($verify_userid)
            ->setVerify_password($verify_password)
        ;
    }

    /**
     * Get Verify_userid value.
     */
    public function getVerify_userid(): ?string
    {
        return $this->Verify_userid;
    }

    /**
     * Set Verify_userid value.
     */
    public function setVerify_userid(?string $verify_userid = null): self
    {
        // validation for constraint: string
        if (!is_null($verify_userid) && !is_string($verify_userid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($verify_userid, true), gettype($verify_userid)), __LINE__);
        }
        $this->Verify_userid = $verify_userid;

        return $this;
    }

    /**
     * Get Verify_password value.
     */
    public function getVerify_password(): ?string
    {
        return $this->Verify_password;
    }

    /**
     * Set Verify_password value.
     */
    public function setVerify_password(?string $verify_password = null): self
    {
        // validation for constraint: string
        if (!is_null($verify_password) && !is_string($verify_password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($verify_password, true), gettype($verify_password)), __LINE__);
        }
        $this->Verify_password = $verify_password;

        return $this;
    }
}
