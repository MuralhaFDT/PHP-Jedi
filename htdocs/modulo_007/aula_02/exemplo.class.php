<?php
	/**
	 * Esta Classe é de exemplo
	 */

	//public funciona em qualquer lugar!
	//private só conseguimos acessar dentro da classe!

	class Exemplo
	{		
		private $var1;
		public $var2;
		/*
		public static $var3 = 'statico';

		public function metodo(){

		}

		public static function metodoEstatico(){
			//echo 'metodo estatico';

		}

		private function metodo2(){

		}
		*/
		public function setVar1($var1){
			$this->var1 = $var1;
		}

		public function pegaVar1(){
			return $this->var1;
		}
	}
?>