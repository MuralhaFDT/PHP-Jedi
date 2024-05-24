<?php
	abstract class teste{
		public $var;
		public function func1(){
			echo "chamando função 1";
		}
		abstract function func2();
	}
	class Principal2{
		public static function outroMetodoEstatico(){
			echo 'meu outro metodo';
		}
	}
	class Principal extends teste{
		public function func2(){
			echo 'Estou delcarando ofialmente um metodo abstrato';
		}
		public static function metodoestatico(){
			echo 'metodo estatico';
		}
		public function funcao(){
			//Principal::metodoestatico();
			//self::metodoestatico();
			Principal2::outroMetodoEstatico();
		}
	}
	$principal = new Principal;
	$principal->funcao();
	//Principal::metodoestatico();
	/*$principal->func1();
	echo '<br />';
	$principal->func2();*/
?>