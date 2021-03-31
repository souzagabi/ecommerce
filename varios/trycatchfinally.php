<?php

    function trataNome($name){
        if (!$name){
            throw new Exception("Nenhum nome foi encontrado.<br>", 1);
        }
        echo ucfirst($name)."<br>";
    }
    try {
        trataNome("Gabriel");
        trataNome("");
        
    } catch (Exception $e) {
        echo $e->getMessage();
    } finally {
        echo "Executou o try catch!!";
    }

?>