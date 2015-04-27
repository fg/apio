##Config

Example config yaml format:
```yaml
Adapters:
    Facebook:
        ApiID: 'facebook_api_id'
        SecretKey: 'facebook_api_secret_key'
```

Example config php format:
```php
return array(
	'Adapters' => array(
		'Facebook' => array(
			'ApiID' => 'facebook_api_id',
			'SecretKey' => 'facebook_api_secret_key'
		)
 	);
);
```


```php
<?php

$configFile = __DIR__ . '/config.yml';

/** @var Apio\Oauth\Config\Config $config **/
$config = Apio\Oauth\Config\Config::fromYaml($configFile);
$facebookAdapterConfig = $config->getAdapterConfig('Facebook');

```