<?php

include('includes/topo.php');
include('includes/menu.php');

?>

<?php
    
    foreach($dadosDocumento as $value):

echo "<div class='container'>
    <div class='col-md-12'>
        <div class='row'>
            <div class='col-md-6 mt-4 mb-2'>
                <div class='accordion' id='accordionExample'>
                    <div class='card'>
                        <div class='card-header fundo' id='headingOne'>
                            <h2 class='mb-0'>
                                <button class='texto-card fundo' type='button' data-toggle='collapse'
                                    data-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>
                                  $value->titulo
                                </button>
                            </h2>
                        </div>

                        <div id='collapseOne' class='collapse ' aria-labelledby='headingOne'
                            data-parent='#accordionExample'>
                            <div class='card-body'>
                                $value->texto
                            </div>

                            <a href='imagensDoc/$value->anexo' class='btn btn-success ml-3 mb-3' dowload>Dowload</a>
                           
                        </div>
                    </div>
                </div>
                </div>
            </div>";


            
    endforeach;  
    ?>
         
    </div>
</div>

<?php

include('includes/rodape.php');

?>