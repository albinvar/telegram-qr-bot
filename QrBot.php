<?php
// Library

class QrBot {
	
	private $tg;
	public $message;
	public $chatId;
	
	function __construct($api) {
		
		$tg = new Telegram($api);
		$this->tg = $tg;
		
		}
	
	private function getResults() {
		
		$result = $this->tg->getData();
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
		
		$firstName = $this->tg->FirstName();
		$this->firstName = $firstName;
		//more infos
		}
		
		
	public function sendText($message) {
		
		$this->getData();
		if (!empty($message)) {
		$chat_id = $this->chatId;
		$reply = $message;
		$content = array('chat_id' => $chat_id, 'text' => $reply);
		return $this->telegram->sendMessage($content);
	}
		}
	
}