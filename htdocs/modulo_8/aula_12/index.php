<?php	
	for($i = 0; $i < 100; $i++){
		$conteudo = 'Meu contúdo do arquivo'.$i;
		unlink('file'.$i.'.txt');
	}
?>