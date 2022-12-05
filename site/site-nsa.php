<?php

include('includes/topo.php');
include('includes/menu.php');

?>


<div class="container">

    <h5 class="text-center mt-4 titulo-cursos">Cursos técnico integrado ao ensino médio</h5>
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header fundo" id="headingOne">
                <h2 class="mb-0">
                    <button class="titulo-card fundo" type="button" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Informática para Internet
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                <iframe width="100%" height="720" self="blank" src="https://nsa.cps.sp.gov.br/" allowfullscreen>NSA</iframe> 
                </div>

                <button class="btn btn-success ml-3 mb-3">Detalhes</button>
            </div>
        </div>
    </div>



</div>


<?php


include('includes/rodape.php');

?>