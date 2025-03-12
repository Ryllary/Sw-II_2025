<?php

	function gera_aleatorio(){

        $vetor = array();
        for ($i=0; $i < 10; $i++) { 

            $vetor[$i] = rand(0,100);
        }

        return $vetor;
	}

    print_r(gera_aleatorio());
?>