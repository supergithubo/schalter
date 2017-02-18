# schalter
Remote kill switch script for php websites deployed on client's server. Useful for securing website remotely when having trouble with client payments.

# Usage
Create json file inside your server:

```json
{  
   "identity":{  
      "allow":true,
      "message":"Internal Server Error. Please contact your developer"
   },
   "client-domain.com":{  
      "allow":true,
      "message":"Internal Server Error. Please contact your developer"
   }
}
```

Put this code inside your clients server:

Ex: (Inside index.php)

```php

include 'Schalter.php';

$subscriptions = new Schalter('http://yourdomain.com/data.json', 'identity');
$subscription = $subscriptions->data;

if($subscription && $subscription['allow'] != 1) {
        exit($subscription['message']);
}
```

You can also set the domain as identity: $_SERVER['HTTP_HOST']
