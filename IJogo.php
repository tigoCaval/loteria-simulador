<?php
interface IJogo{   
   public static function sorteio($jogo);
   public static function gerar($jogo,$marcador,$qtdCartela);
   public static function imprimir($valor);
}