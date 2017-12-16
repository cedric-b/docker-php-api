<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class SwarmGetResponse200JoinTokens
{
    /**
     * @var string
     */
    protected $worker;
    /**
     * @var string
     */
    protected $manager;

    /**
     * @return string
     */
    public function getWorker(): ?string
    {
        return $this->worker;
    }

    /**
     * @param string $worker
     *
     * @return self
     */
    public function setWorker(?string $worker): self
    {
        $this->worker = $worker;

        return $this;
    }

    /**
     * @return string
     */
    public function getManager(): ?string
    {
        return $this->manager;
    }

    /**
     * @param string $manager
     *
     * @return self
     */
    public function setManager(?string $manager): self
    {
        $this->manager = $manager;

        return $this;
    }
}
