<?php
namespace Emas;

final class Client
{
    private $appId;
    private $secretKey;
    private $env;
    private $debug;
    private $client;
    
    public function __construct($appId, $secret, $env = 'dev', $debug = true) {
        $this->appId     = $appId;
        $this->secretKey = $secret;
        $this->env       = $env;
        $this->debug     = $debug;
        $this->client    = new \GuzzleHttp\Client;
    }
    
    private function call($path, $method, array $data) {
        $base = $this->env === 'dev' ? 'https://oroconnect-dev.e-mas.com/v1' : 'https://oroconnect.e-mas.com/v1';
        $time = date('Y-m-d H:i:s');
        $opt  = array(
            'headers'   => array(
                'app-id'    => $this->appId,
                'timestamp' => $time,
                'signature' => sha1(md5($this->appId . $time . $this->secretKey)),
                'content-type' => 'application/json',
                'accept-type'  => 'application/json',
            ),
            'debug'     => $this->debug,
        );
        
        if (strtoupper($method) === 'POST') {
            $opt['json'] = $data;
        } else if (strtoupper($method) === 'GET') {
            $opt['query'] = $data;
        }
        
        $res = $this->client->request($method, $base . $path, $opt);
        $rs = \GuzzleHttp\json_decode($res->getBody());
        
        return $rs;
    }
    
    /**
     * Init transaction
     * 
     * @param string    $customerId
     * @param float     $weight
     * @return \StdClass
     */
    public function buyInit($customerId, $weight) {
        return $this->call('/thirdparty/buy-gold', 'POST', array(
            'customer_id'   => (string) $customerId,
            'weight'        => (float) $weight,
        ));
    }
    
    /**
     * Confirm transaction
     * 
     * @param string    $customerId
     * @param string    $paymentId
     * @param string    $vendorTransactionId
     * @return \StdClass
     */
    public function buyConfirm($customerId, $paymentId, $vendorTransactionId) {
        return $this->call('/thirdparty/buy-confirm', 'POST', array(
            'customer_id' => (string) $customerId,
            'payment_id'  => (string) $paymentId,
            'vendor_transaction_id' => (string) $vendorTransactionId,
        ));
    }
    
    /**
     * Cancel transaction
     * 
     * @param string    $merchantCustomerId
     * @param string    $paymentId
     * @param string    $vendorTransactionId
     * @return \StdClass
     */
    public function buyCancel($merchantCustomerId,$paymentId, $vendorTransactionId){
        return $this->call('/thirdparty/buy-gold-cancel','POST',array(
            'merchant_customer_id' => (string) $merchantCustomerId,
            'payment_id'  => (string) $paymentId,
            'vendor_transaction_id' => (string) $vendorTransactionId,
        ));
    }
    /**
     * Get product
     * @return \StdClass
     */
    public function getProduct(){
        return $this->call('/thirdparty/buy-gold','GET',[]);
    }
     
    /**
     * Get product price history
     * @return \StdClass
     */
    public function getProductPriceHistory(){
        return $this->call('/thirdparty/product-log','GET',[]);
    }
    
}