# fritz.box-UPNP-PHP-API
A simple PHP Wrapper for fritz.box API

## Important ##

This Class was a quick and fast idea, still under development. 

The Class was tested with a Fritzbox 7490, but should work with every Fritzbox running OS >5. (i suppose)

More detailed Informations, further development and way better documentation is planned as quick as possible.

How to:

Install via composer bendspoons/fritz.box-UPNP-PHP-API

Then in your index.php along with the autoloader.php, use the following (currently only these four are impleneted):

```php
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';

$res = new fritzbox\App('fritz.box', 'username', 'passwort');

// Get/Dump possible Methods for WLANConfiguration
$res->dumpResult(
	$res->getRequestXMLConfigOptions(new fritzbox\Service\WLANConfiguration)->getXMLConfigMethods()
);

// Get Method GetInfo for WLANConfiguration
$res->dumpResult(
	$res->sendRequest(new fritzbox\Service\WLANConfiguration)->GetInfo()
);

/*
$res->dumpResult(
	$res->getRequestXMLConfigOptions(new fritzbox\Service\Time)->getXMLConfigMethods()
);

$res->dumpResult(
	$res->sendRequest(new fritzbox\Service\Time)->GetInfo()
);


$res->dumpResult(
	$res->getRequestXMLConfigOptions(new fritzbox\Service\DeviceInfo)->getXMLConfigMethods()
);

$res->dumpResult(
	$res->sendRequest(new fritzbox\Service\DeviceInfo)->GetInfo()
);


$res->dumpResult(
	$res->getRequestXMLConfigOptions(new fritzbox\Service\WANCommonInterfaceConfig)->getXMLConfigMethods()
);

$res->dumpResult(
	$res->sendRequest(new fritzbox\Service\WANCommonInterfaceConfig)->GetAddonInfos()
);
*/
?>
```