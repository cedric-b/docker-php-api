<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class TaskSpecResourcesLimits
{
    /**
     * @var int
     */
    protected $nanoCPUs;
    /**
     * @var int
     */
    protected $memoryBytes;

    /**
     * @return int
     */
    public function getNanoCPUs(): ?int
    {
        return $this->nanoCPUs;
    }

    /**
     * @param int $nanoCPUs
     *
     * @return self
     */
    public function setNanoCPUs(?int $nanoCPUs): self
    {
        $this->nanoCPUs = $nanoCPUs;

        return $this;
    }

    /**
     * @return int
     */
    public function getMemoryBytes(): ?int
    {
        return $this->memoryBytes;
    }

    /**
     * @param int $memoryBytes
     *
     * @return self
     */
    public function setMemoryBytes(?int $memoryBytes): self
    {
        $this->memoryBytes = $memoryBytes;

        return $this;
    }
}
