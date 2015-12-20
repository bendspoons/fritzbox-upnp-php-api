<?php
/**
 * Project: fritz.box UPNP PHP API
 * User: Dominic Roesmann <dominic@bendspoons.com>
 * Date: 20.12.2015
 */

namespace fritzbox\Service;

/**
 * Class Service\WLANConfiguration
 * @package fritzbox
 * @author Dominic Roesmann <dominic@bendspoons.com>
 */
class WLANConfiguration {
	public $controlUri;
	public $uri;
	public $scpdurl;
	
	public function __construct() {
		$this->controlUri 	= "/upnp/control/wlanconfig1";
		$this->uri 			= "urn:dslforum-org:service:WLANConfiguration:1";
		$this->scpdurl 		= "/wlanconfigSCPD.xml";
	}
}
