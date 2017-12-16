<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class SwarmGetResponse200
{
    /**
     * @var string
     */
    protected $iD;
    /**
     * @var ClusterInfoVersion
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
     * @var SwarmSpec
     */
    protected $spec;
    /**
     * @var SwarmGetResponse200JoinTokens
     */
    protected $joinTokens;

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
     * @return ClusterInfoVersion
     */
    public function getVersion(): ?ClusterInfoVersion
    {
        return $this->version;
    }

    /**
     * @param ClusterInfoVersion $version
     *
     * @return self
     */
    public function setVersion(?ClusterInfoVersion $version): self
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
     * @return SwarmSpec
     */
    public function getSpec(): ?SwarmSpec
    {
        return $this->spec;
    }

    /**
     * @param SwarmSpec $spec
     *
     * @return self
     */
    public function setSpec(?SwarmSpec $spec): self
    {
        $this->spec = $spec;

        return $this;
    }

    /**
     * @return SwarmGetResponse200JoinTokens
     */
    public function getJoinTokens(): ?SwarmGetResponse200JoinTokens
    {
        return $this->joinTokens;
    }

    /**
     * @param SwarmGetResponse200JoinTokens $joinTokens
     *
     * @return self
     */
    public function setJoinTokens(?SwarmGetResponse200JoinTokens $joinTokens): self
    {
        $this->joinTokens = $joinTokens;

        return $this;
    }
}
