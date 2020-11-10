<?php
// Library

class QrBot {
	
	private $tg;
	public $message;
	public $chatId;
	
	function __construct($api) {
		
		$tg = new Telegram($api);
		$this->tg = $tg;
		$result = $tg->getData();
		$text = $result['message'] ['text'];
		$chat_id = $result['message'] ['chat']['id'];
		if (!empty($text)) {
		$reply = "test";
		$content = array('chat_id' => $chat_id, 'text' => $reply);
		return $tg->sendMessage($content);
	}
		
		
		}
	
	private function getResults() {
		
		
		return $result;
		
		}
		
	public function getData() {
		
		
		
		}
		
	public function getInfo() {
		
		$firstName = $this->tg->FirstName();
		$this->firstName = $firstName;
		//more infos
		}
		
		
	public function sendText($message) {
		
		}
	
}