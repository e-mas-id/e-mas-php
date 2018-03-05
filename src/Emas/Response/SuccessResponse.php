<?php
namespace Emas\Response;

class SuccessResponse
{
    /**
     * @var int
     */
    private $code;
    
    /**
     * @var string
     */
    private $type;
    
    /**
     * @var mixed
     */
    private $data;
    
    /**
     * @var int
     */
    private $total;
    
    /**
     * @var string
     */
    private $firstPage;
    
    /**
     * @var string
     */
    private $lastPage;
    
    /**
     * @var string
     */
    private $nextPage;
    
    /**
     * @var string
     */
    private $timestamp;
    
    public function getCode() {
        return $this->code;
    }

    public function getType() {
        return $this->type;
    }

    public function getData() {
        return $this->data;
    }

    public function getTotal() {
        return $this->total;
    }

    public function getFirstPage() {
        return $this->firstPage;
    }

    public function getLastPage() {
        return $this->lastPage;
    }

    public function getNextPage() {
        return $this->nextPage;
    }

    public function getTimestamp() {
        return $this->timestamp;
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function setFirstPage($firstPage) {
        $this->firstPage = $firstPage;
    }

    public function setLastPage($lastPage) {
        $this->lastPage = $lastPage;
    }

    public function setNextPage($nextPage) {
        $this->nextPage = $nextPage;
    }

    public function setTimestamp($timestamp) {
        $this->timestamp = $timestamp;
    }
}
