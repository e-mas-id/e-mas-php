# e-mas-php
library for thirdparty connect to e-mas API

## Example Usage

```php
    $cli = new \Emas\Client($appId, $secretKey, $env, $debug);

    $res = $cli->buyInit($customerId, $weight);
    // do something with response
```

You can handle the resp object 
For more information and support please contact info@e-mas.com or dev@e-mas.com.
