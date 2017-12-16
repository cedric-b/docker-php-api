<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class Secret
{
    /**
     * @var string
     */
    protected $iD;
    /**
     * @var SecretVersion
     */
    protected $version;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $updatedAt;
    /**
     * @var ServiceSpec
     */
    protected $spec;

    /**
     * @return string
     */
    public function getID(): ?string
    {
        return $this->iD;
    }

    /**
     * @param string $iD
     *
     * @return self
     */
    public function setID(?string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return SecretVersion
     */
    public function getVersion(): ?SecretVersion
    {
        return $this->version;
    }

    /**
     * @param SecretVersion $version
     *
     * @return self
     */
    public function setVersion(?SecretVersion $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return ServiceSpec
     */
    public function getSpec(): ?ServiceSpec
    {
        return $this->spec;
    }

    /**
     * @param ServiceSpec $spec
     *
     * @return self
     */
    public function setSpec(?ServiceSpec $spec): self
    {
        $this->spec = $spec;

        return $this;
    }
}
