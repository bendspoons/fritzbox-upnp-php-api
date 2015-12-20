<?php
/**
 * Project: fritz.box UPNP PHP API
 * User: Dominic Roesmann <dominic@bendspoons.com>
 * Date: 20.12.2015
 */

namespace fritzbox\Service;

/**
 * Class Service\WANCommonInterfaceConfig
 * @package fritzbox
 * @author Dominic Roesmann <dominic@bendspoons.com>
 */
class WANCommonInterfaceConfig {
	public $controlUri;
	public $uri;
	public $scpdurl;
	
	public function __construct() {
		$this->controlUri 	= "/igdupnp/control/WANCommonIFC1";
		$this->uri 			= "urn:schemas-upnp-org:service:WANCommonInterfaceConfig:1";
		$this->scpdurl 		= "/igdicfgSCPD.xml";
	}
}
