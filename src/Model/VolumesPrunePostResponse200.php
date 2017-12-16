<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class VolumesPrunePostResponse200
{
    /**
     * @var string[]
     */
    protected $volumesDeleted;
    /**
     * @var int
     */
    protected $spaceReclaimed;

    /**
     * @return string[]
     */
    public function getVolumesDeleted(): ?array
    {
        return $this->volumesDeleted;
    }

    /**
     * @param string[] $volumesDeleted
     *
     * @return self
     */
    public function setVolumesDeleted(?array $volumesDeleted): self
    {
        $this->volumesDeleted = $volumesDeleted;

        return $this;
    }

    /**
     * @return int
     */
    public function getSpaceReclaimed(): ?int
    {
        return $this->spaceReclaimed;
    }

    /**
     * @param int $spaceReclaimed
     *
     * @return self
     */
    public function setSpaceReclaimed(?int $spaceReclaimed): self
    {
        $this->spaceReclaimed = $spaceReclaimed;

        return $this;
    }
}
