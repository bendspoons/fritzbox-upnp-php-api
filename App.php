<?php
/**
 * Project: fritz.box UPNP PHP API
 * User: Dominic Roesmann <dominic@bendspoons.com>
 * Date: 20.12.2015
 */

namespace fritzbox;

use Exception;
use SoapClient;

/**
 * Class App
 * @package fritzbox
 * @author Dominic Roesmann <dominic@bendspoons.com>
 */
class App
{
	/**
	 * @var string the hostname/ip address of the fritzbox
	 */
	private $host;
	
	/**
	 * @var int port of the fritzbox, defaults to 49000
	 */
	private $port = 49000;
	
	/**
	 * @var int http protocol of the fritzbox, defaults to http://
	 */
	private $protocol = "http://";

	/**
	 * @var string the username of fritzbox, usually email or empty
	 */
	private $username;

	/**
	 * @var string the password of fritzbox
	 */
	private $password;

	/**
	 * @var object $client
	 */
	private $client;

	/**
	 * @var object $xml
	 */
	private $xml;

	/**
	 * @param string $host the hostname/ip address of the fritzbox
	 * @param string $username the username of fritzbox, usually email or empty
	 * @param string $password the password of fritzbox
	 * @throws \Exception
	 */
	public function __construct($host = null, $username = null, $password = null){
		if (!is_string($host)) {
			throw new Exception('Missing parameter 1 "host"', 100);
		}
		if (!is_string($password)) {
			throw new Exception('Missing parameter 2 "password"', 100);
		}
		
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
	}
	
	/**
	 * @param object $params
	 * @param bool $noroot
	 * @return \App\$client
	 */
	public function sendRequest($params = null, $noroot = true) {
		$client = $this->client = new SoapClient(
		    null,
		    array(
		          'location'	=> $this->protocol . $this->host . ":" . $this->port . $params->controlUri,
		          'uri'			=> $params->uri,
		          'noroot'		=> $noroot,
		          'login'		=> $this->username,
		          'password'	=> $this->password
		    )
		);
		
		return $this->client;
	}
	
	/**
	 * @param object $params
	 * @return \App
	 */
	public function getRequestXMLConfigOptions($params = null) {
		$this->xml = simplexml_load_string(file_get_contents($this->protocol . $this->host . ":" . $this->port . $params->scpdurl));
		return $this;
	}
	
	/**
	 * @return \App
	 */
	public function getXMLConfigMethods() {
		$actions = array();
		foreach ($this->xml->actionList->action as $option) : 
			$actions[] = (string)$option->name; //Normalize from XMLObject
		endforeach;
		return (object)$actions;
	}
	
	public function dumpResult($result = null) {
		echo "<pre>";
		print_r($result);
		echo "</pre>";
	}
}
?>
