<?php
/**
 * Project: fritz.box UPNP PHP API
 * User: Dominic Roesmann <dominic@bendspoons.com>
 * Date: 20.12.2015
 */

namespace fritzbox\Service;

/**
 * Class Service\DeviceInfo
 * @package fritzbox
 * @author Dominic Roesmann <dominic@bendspoons.com>
 */
class DeviceInfo {
	public $controlUri;
	public $uri;
	public $scpdurl;
	
	public function __construct() {
		$this->controlUri 	= "/upnp/control/deviceinfo";
		$this->uri 			= "urn:dslforum-org:service:DeviceInfo:1";
		$this->scpdurl 		= "/deviceinfoSCPD.xml";
	}
}
