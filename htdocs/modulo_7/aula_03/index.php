<?php
	//final class Filha{} - Não pode ser Herdada
	class Filha{
		/*protected function funcaoTeste(){
			echo 'chamando função teste';
		}*/
		private function funcaoTeste(){
			echo 'chamando funcao teste';
		}
		public function mostrarOla(){
			$this->funcaoTeste();
			echo '<br />';
			echo "Olá, Mundo!";
		}
	}
	class Pai extends Filha{
		public function mostrarOla(){
			parent::mostrarOla();
			echo '<br />';
			echo 'nova função';
		}

		public function mostrarTchau(){
			echo 'Tchau Mundo!';
			echo '<br />';
			$this->funcaoTeste();
		}
	}
	/*
	$pai = new Pai;
	$pai->mostrarTchau();
	echo '<hr />';
	*/

	$pai = new Pai;
	$pai->mostrarOla();

	//$pai->mostrarTchau();	
	//$filha->mostrarOla();
?>