 <!DOCTYPE html>
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <title></title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     </head>
     <body>
         <div class="container">
           <div class="row">
              <div class="col-md-12">
                <?php 
                    require_once "./Jogo.php";
                    /**
                     * gerar('Palavra-Chave','Marcador','QTD_Cartela')
                     * 
                     * Palavra-Chave: MEGASENA, LOTOFACIL, LOTOMANIA
                     * Marcador: quantidade de numero para marcar a cartela
                     * QTD_Cartela: quantidade de cartelas para gerar
                     *  
                     * **/
                     echo "<p class='alert-success'>Testando jogo loteria <br></p>";
                     Jogo::gerar('MEGASENA',6,5);
                ?>
              </div>
               
           </div>
          
         </div>

     </body>
 </html>