<?php
	//criar pasta
	/*
	mkdir('pasta');
	if (is_dir('pasta')) {
		echo 'É uma pasta válida';
	}else{
		echo "Pasta não existe";
	}*/

	//deletar a pasta
	//rmdir('pasta');

	//verificar conteudo das pastas
	if ($handle = opendir('Pasta')) {
    
    /* Esta é a forma correta de percorrer o diretório */
    while ($file = readdir($handle)) {
    	if($file == '.'|| $file == '..'){
    		continue;
    	}
    	/*
    	if(is_dir('pasta/'.$file) == false){
    		//é um arquivo
    	}else{
    		//uma pasta
    	}*/
        echo "$file\n";
        echo '<br />';
    }

    closedir($handle);
}
?>