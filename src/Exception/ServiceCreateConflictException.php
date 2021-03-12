<?php

namespace Docker\API\Exception;

class ServiceCreateConflictException extends ConflictException
{
    private $errorResponse;
    public function __construct(\Docker\API\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('name conflicts with an existing service', 409);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}