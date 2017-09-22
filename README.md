# schalter
Remote kill switch script for php websites deployed on client's server. Useful for securing website remotely when having trouble with client payments.

# Usage
Create json file inside your server:

```json
{  
   "client-domain.com":{  
      "allow":true,
      "message":"Internal Server Error. Please contact your developer"
   },
   "otherclient-domain.com":{  
      "allow":false,
      "message":"Internal Server Error. Please contact your developer"
   }
}
```

Upload the source inside your client's server and put this code somewhere (entry file, theme file etc):

Ex: (Inside index.php entry file)

```php

include 'Schalter.php';

$subscriptions = new Schalter('http://yourdomain.com/data.json', 'client-domain.com');
$subscription = $subscriptions->data;

if($subscription && $subscription['allow'] != 1) {
        exit($subscription['message']);
}
```

You can also set the domain as identity: $_SERVER['HTTP_HOST']
