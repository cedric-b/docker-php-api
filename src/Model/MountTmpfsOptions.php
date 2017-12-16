<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class MountTmpfsOptions
{
    /**
     * @var int
     */
    protected $sizeBytes;
    /**
     * @var int
     */
    protected $mode;

    /**
     * @return int
     */
    public function getSizeBytes(): ?int
    {
        return $this->sizeBytes;
    }

    /**
     * @param int $sizeBytes
     *
     * @return self
     */
    public function setSizeBytes(?int $sizeBytes): self
    {
        $this->sizeBytes = $sizeBytes;

        return $this;
    }

    /**
     * @return int
     */
    public function getMode(): ?int
    {
        return $this->mode;
    }

    /**
     * @param int $mode
     *
     * @return self
     */
    public function setMode(?int $mode): self
    {
        $this->mode = $mode;

        return $this;
    }
}
