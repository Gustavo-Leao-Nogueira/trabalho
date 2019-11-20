<?php 

    $nome_projeto = "";  

    function setLocais($opcao){
       if($opcao == 'principal'){
            return array("", "view/", "view/", "view/", "view/", "view/", "", "", "", "", "", "", "");
       }
       elseif($opcao == 'secundario'){
            return array("../", "../view/", "../view/", "../view/", "../view/", "../view/", "../", "../", "../", "../", "../", "../", "../");
       }
    }
    
    function setTitulo($titulo){ 
        global $nome_projeto;
        $nome_projeto = $titulo; 
    }

?>