<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class ServicesIdUpdatePostBody
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string[]
     */
    protected $labels;
    /**
     * @var TaskSpec
     */
    protected $taskTemplate;
    /**
     * @var ServiceSpecMode
     */
    protected $mode;
    /**
     * @var ServiceSpecUpdateConfig
     */
    protected $updateConfig;
    /**
     * @var ServiceSpecNetworksItem[]
     */
    protected $networks;
    /**
     * @var EndpointSpec
     */
    protected $endpointSpec;

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
    public function getLabels(): ?\ArrayObject
    {
        return $this->labels;
    }

    /**
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(?\ArrayObject $labels): self
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * @return TaskSpec
     */
    public function getTaskTemplate(): ?TaskSpec
    {
        return $this->taskTemplate;
    }

    /**
     * @param TaskSpec $taskTemplate
     *
     * @return self
     */
    public function setTaskTemplate(?TaskSpec $taskTemplate): self
    {
        $this->taskTemplate = $taskTemplate;

        return $this;
    }

    /**
     * @return ServiceSpecMode
     */
    public function getMode(): ?ServiceSpecMode
    {
        return $this->mode;
    }

    /**
     * @param ServiceSpecMode $mode
     *
     * @return self
     */
    public function setMode(?ServiceSpecMode $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * @return ServiceSpecUpdateConfig
     */
    public function getUpdateConfig(): ?ServiceSpecUpdateConfig
    {
        return $this->updateConfig;
    }

    /**
     * @param ServiceSpecUpdateConfig $updateConfig
     *
     * @return self
     */
    public function setUpdateConfig(?ServiceSpecUpdateConfig $updateConfig): self
    {
        $this->updateConfig = $updateConfig;

        return $this;
    }

    /**
     * @return ServiceSpecNetworksItem[]
     */
    public function getNetworks(): ?array
    {
        return $this->networks;
    }

    /**
     * @param ServiceSpecNetworksItem[] $networks
     *
     * @return self
     */
    public function setNetworks(?array $networks): self
    {
        $this->networks = $networks;

        return $this;
    }

    /**
     * @return EndpointSpec
     */
    public function getEndpointSpec(): ?EndpointSpec
    {
        return $this->endpointSpec;
    }

    /**
     * @param EndpointSpec $endpointSpec
     *
     * @return self
     */
    public function setEndpointSpec(?EndpointSpec $endpointSpec): self
    {
        $this->endpointSpec = $endpointSpec;

        return $this;
    }
}
