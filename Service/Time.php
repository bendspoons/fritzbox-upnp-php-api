<?php
/**
 * Project: fritz.box UPNP PHP API
 * User: Dominic Roesmann <dominic@bendspoons.com>
 * Date: 20.12.2015
 */

namespace fritzbox\Service;

/**
 * Class Service\Time
 * @package fritzbox
 * @author Dominic Roesmann <dominic@bendspoons.com>
 */
class Time {
	public $controlUri;
	public $uri;
	public $scpdurl;
	
	public function __construct() {
		$this->controlUri 	= "/upnp/control/time";
		$this->uri 			= "urn:dslforum-org:service:Time:1";
		$this->scpdurl 		= "/timeSCPD.xml";
	}
}
