<?php

namespace Docker\API\Model;

class ServicesIdUpdatePostBody
{
    /**
     * Name of the service.
     *
     * @var string
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]
     */
    protected $labels;
    /**
     * User modifiable task configuration.
     *
     * @var TaskSpec
     */
    protected $taskTemplate;
    /**
     * Scheduling mode for the service.
     *
     * @var ServiceSpecMode
     */
    protected $mode;
    /**
     * Specification for the update strategy of the service.
     *
     * @var ServiceSpecUpdateConfig
     */
    protected $updateConfig;
    /**
     * Specification for the rollback strategy of the service.
     *
     * @var ServiceSpecRollbackConfig
     */
    protected $rollbackConfig;
    /**
     * Specifies which networks the service should attach to.
     *
     * @var NetworkAttachmentConfig[]
     */
    protected $networks;
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @var EndpointSpec
     */
    protected $endpointSpec;
    /**
     * Name of the service.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the service.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * User-defined key/value metadata.
     *
     * @return string[]
     */
    public function getLabels() : iterable
    {
        return $this->labels;
    }
    /**
     * User-defined key/value metadata.
     *
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * User modifiable task configuration.
     *
     * @return TaskSpec
     */
    public function getTaskTemplate() : TaskSpec
    {
        return $this->taskTemplate;
    }
    /**
     * User modifiable task configuration.
     *
     * @param TaskSpec $taskTemplate
     *
     * @return self
     */
    public function setTaskTemplate(TaskSpec $taskTemplate) : self
    {
        $this->taskTemplate = $taskTemplate;
        return $this;
    }
    /**
     * Scheduling mode for the service.
     *
     * @return ServiceSpecMode
     */
    public function getMode() : ServiceSpecMode
    {
        return $this->mode;
    }
    /**
     * Scheduling mode for the service.
     *
     * @param ServiceSpecMode $mode
     *
     * @return self
     */
    public function setMode(ServiceSpecMode $mode) : self
    {
        $this->mode = $mode;
        return $this;
    }
    /**
     * Specification for the update strategy of the service.
     *
     * @return ServiceSpecUpdateConfig
     */
    public function getUpdateConfig() : ServiceSpecUpdateConfig
    {
        return $this->updateConfig;
    }
    /**
     * Specification for the update strategy of the service.
     *
     * @param ServiceSpecUpdateConfig $updateConfig
     *
     * @return self
     */
    public function setUpdateConfig(ServiceSpecUpdateConfig $updateConfig) : self
    {
        $this->updateConfig = $updateConfig;
        return $this;
    }
    /**
     * Specification for the rollback strategy of the service.
     *
     * @return ServiceSpecRollbackConfig
     */
    public function getRollbackConfig() : ServiceSpecRollbackConfig
    {
        return $this->rollbackConfig;
    }
    /**
     * Specification for the rollback strategy of the service.
     *
     * @param ServiceSpecRollbackConfig $rollbackConfig
     *
     * @return self
     */
    public function setRollbackConfig(ServiceSpecRollbackConfig $rollbackConfig) : self
    {
        $this->rollbackConfig = $rollbackConfig;
        return $this;
    }
    /**
     * Specifies which networks the service should attach to.
     *
     * @return NetworkAttachmentConfig[]
     */
    public function getNetworks() : array
    {
        return $this->networks;
    }
    /**
     * Specifies which networks the service should attach to.
     *
     * @param NetworkAttachmentConfig[] $networks
     *
     * @return self
     */
    public function setNetworks(array $networks) : self
    {
        $this->networks = $networks;
        return $this;
    }
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @return EndpointSpec
     */
    public function getEndpointSpec() : EndpointSpec
    {
        return $this->endpointSpec;
    }
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @param EndpointSpec $endpointSpec
     *
     * @return self
     */
    public function setEndpointSpec(EndpointSpec $endpointSpec) : self
    {
        $this->endpointSpec = $endpointSpec;
        return $this;
    }
}