<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class SwarmSpecTaskDefaultsLogDriver
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string[]
     */
    protected $options;

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOptions(): ?\ArrayObject
    {
        return $this->options;
    }

    /**
     * @param string[] $options
     *
     * @return self
     */
    public function setOptions(?\ArrayObject $options): self
    {
        $this->options = $options;

        return $this;
    }
}
