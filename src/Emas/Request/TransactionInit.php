<?php
namespace Emas\Request;

class TransactionInit
{
    /**
     * @var string
     */
    private $customerId;
    
    /**
     * @var float
     */
    private $weight;
    
    public function getCustomerId() {
        return $this->customerId;
    }

    public function setCustomerId($customerId) {
        $this->customerId = $customerId;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }
}
