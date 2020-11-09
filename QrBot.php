<?php
// Library

require './config.php';

class TelegramApi {
	
	private $telegram;
	
	function __construct($api) {
		
		$telegram = new Telegram($api);
		$this->$telegram = $telegram;
		
		}
	
	public function getData() {
		
		//codes
		
		}
	
}