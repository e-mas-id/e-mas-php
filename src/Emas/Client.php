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
//        $this->client    = new;
    }
    
    public function call($path, $method, array $data) {
        
    }
    
    public function buyInit($customerId, $weight) {
        
    }
}