<?php
namespace Emas\Response;

class ErrorResponse
{
    /**
     * @var int
     */
    private $errorCode;
    
    /**
     * @var string
     */
    private $errorMessage;
    
    /**
     * @var mixed
     */
    private $errorData;
    
    /**
     * @var string
     */
    private $timestamp;
    
    public function getErrorCode() {
        return $this->errorCode;
    }

    public function getErrorMessage() {
        return $this->errorMessage;
    }

    public function getErrorData() {
        return $this->errorData;
    }

    public function getTimestamp() {
        return $this->timestamp;
    }

    public function setErrorCode($errorCode) {
        $this->errorCode = $errorCode;
    }

    public function setErrorMessage($errorMessage) {
        $this->errorMessage = $errorMessage;
    }

    public function setErrorData($errorData) {
        $this->errorData = $errorData;
    }

    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }
}