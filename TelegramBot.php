 <?php
	class TelegramBot {
		protected $token = "490305261:AAETi8NFNcdI5dZpBCW2EeFeXdSAJ01iuuQ";
		
		protected function query($method, $params = [])
		{
			$url = "https://api.telegram.org/bot";
			
			$url .= $this->token;
			
			$url .= "/".$method;
		}
		
		public function getUpdates()
		{
		
		}
		
		public function sendMessage()
		{
		
		}
	}
 ?>