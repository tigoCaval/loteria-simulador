<?php
require_once "./IJogo.php";
/**JOGO Versão 1**/
class Jogo implements IJogo{

    const MEGASENA = "MEGASENA";
    const MEGA_VOLANTE = 60;

    const LOTOFACIL = "LOTOFACIL";
    const LOTOFACIL_VOLANTE = 25;

    const LOTOMANIA = "LOTOMANIA";
    const LOTO_MANIA_VOLANTE = 100;


    /**Aplicar o sorteio do jogo**/
    public static function sorteio($jogo){
        if($jogo == self::MEGASENA)    
             return rand(1,self::MEGA_VOLANTE);
        else if($jogo == self::LOTOFACIL) 
             return rand(1,self::LOTOFACIL_VOLANTE);
        else if($jogo == self::LOTOMANIA)
             return rand(1,self::LOTO_MANIA_VOLANTE);
        else
            return null;            
    }
    /**Gerar valores do jogo**/
    public static function gerar($jogo,$marcador,$qtdCartela){
        echo "Jogo da ".$jogo."<br>";
        if(self::sorteio($jogo) == null){
            echo "Este jogo não foi encontrado";
            return 0;
        }
        if($marcador <= 50 && $qtdCartela <= 30 )
        {
            for($i = 1; $i <= $qtdCartela; $i++){
                $marcador_aux = 1;    
                $valor = [];
                while($marcador_aux <= $marcador){
                    $sorteio = self::sorteio($jogo);                  
                    if(!in_array($sorteio,$valor)) // not exists numeros repetidos
                        $valor[] = $sorteio;
                    else{ // existe numeros repetidos
                        while(in_array($sorteio,$valor))
                        {
                            $sorteio = self::sorteio($jogo); // sorteia outro numero |the end while 2   
                        }
                        $valor[] = $sorteio;
                    }    
                    if($marcador_aux == $marcador)
                        self::imprimir($valor);
                    $marcador_aux++; // the end while 1  
                }
            }
        }    
    }
    /**imprimir jogo**/
    public static function imprimir($valor)
    {
         $montar = ""; 
         asort($valor); // ordena valores do array
         foreach($valor as $key )
            $montar .= "-".$key; 
         echo "<span class='text-danger'>".$montar."</span><br>";
         return $valor = [];
    }



}
