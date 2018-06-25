<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SipejaModel extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	function get_web_page( $url ){
	    $options = array(
	        CURLOPT_RETURNTRANSFER => true,     // return web page
	        CURLOPT_HEADER         => false,    // don't return headers
	        CURLOPT_FOLLOWLOCATION => true,     // follow redirects
	        CURLOPT_ENCODING       => "",       // handle all encodings
	        CURLOPT_USERAGENT      => "spider", // who am i
	        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
	        CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
	        CURLOPT_TIMEOUT        => 120,      // timeout on response
	        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
	        CURLOPT_SSL_VERIFYPEER => false     // Disabled SSL Cert checks
	    );

	    $ch      = curl_init( $url );
	    curl_setopt_array( $ch, $options );
	    $content = curl_exec( $ch );
	    $err     = curl_errno( $ch );
	    $errmsg  = curl_error( $ch );
	    $header  = curl_getinfo( $ch );
	    curl_close( $ch );

	    // $header['errno']   = $err;
	    // $header['errmsg']  = $errmsg;
	    $header = $content;
	    return $header;
	}

	/*Static URL Below*/
	public function getNumSamples(){
		return $this->get_web_page("https://sipeja.b4t.go.id/api/getJumlahSampel");
	}
	public function countWeeklyOrder(){
		return $this->get_web_page("https://sipeja.b4t.go.id/api/countWeeklyOrder");
	}
	public function rupiahLabs(){
		return $this->get_web_page("https://sipeja.b4t.go.id/api/rupiahLabs");
	}
	public function countProductSample(){
		return $this->get_web_page("https://sipeja.b4t.go.id/api/countProductSample");
	}
}
