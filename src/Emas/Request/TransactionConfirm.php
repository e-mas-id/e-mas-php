<?php
namespace Emas\Request;

class TransactionConfirm
{
    /**
     * @var string
     */
    private $customerId;
    
    /**
     * @var string
     */
    private $paymentId;
    
    /**
     * @var float
     */
    private $vendorTransactionId;
    
    public function getCustomerId() {
        return $this->customerId;
    }

    public function setCustomerId($customerId) {
        $this->customerId = $customerId;
    }

    public function getPaymentId() {
        return $this->paymentId;
    }

    public function setPaymentId($paymentId) {
        $this->paymentId = $paymentId;
    }

    public function getVendorTransactionId() {
        return $this->vendorTransactionId;
    }

    public function setVendorTransactionId($vendorTransactionId) {
        $this->vendorTransactionId = $vendorTransactionId;
    }


}
