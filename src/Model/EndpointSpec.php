<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class EndpointSpec
{
    /**
     * @var string
     */
    protected $mode;
    /**
     * @var EndpointPortConfig[]
     */
    protected $ports;

    /**
     * @return string
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     *
     * @return self
     */
    public function setMode(?string $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * @return EndpointPortConfig[]
     */
    public function getPorts(): ?array
    {
        return $this->ports;
    }

    /**
     * @param EndpointPortConfig[] $ports
     *
     * @return self
     */
    public function setPorts(?array $ports): self
    {
        $this->ports = $ports;

        return $this;
    }
}
