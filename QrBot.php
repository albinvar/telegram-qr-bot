<?php
// Library

require './config.php';

class QrBot {
	
	private $telegram;
	public $message;
	public $chatId;
	
	function __construct($api) {
		
		$telegram = new Telegram($api);
		$this->telegram = $telegram;
		
		}
	
	private function getResults() {
		
		$result = $this->telegram->getData();
		return $result;
		
		}
		
	public function getData() {
		
		$result = $this->getResults();
		$text = $result['message'] ['text'];
		$chat_id = $result['message'] ['chat']['id'];
		$this->message = $text;
		$this->chatId = $chat_id;
		
		}
		
	public function getInfo() {
		
		$firstName = $this->telegram->FirstName();
		$this->$firstName = $firstName;
		//more infos
		}
		
		
	public function sendText($message) {
		
		if (!empty($message)) {
		$chat_id = $this->chatId;
		$reply = $message;
		$content = array('chat_id' => $chat_id, 'text' => $reply);
		return $this->telegram->sendMessage($content);
	}
		}
	
}