<?php

include('includes/topo.php');
include('includes/menu.php');

?>


<div class="container area mt-4 mb-5 ">
    <div class="row">

    <?php
    
    foreach($dadosNoticia as $value):

     echo " <div class='col-md-6 card card-novidades pt-3'>
            <img src='imagens/$value->imagem' alt=''>

            <p class='text-center p-3'>$value->conteudo </p>
            <a class='btn btn-dark mb-4' href='#' data-toggle='modal' data-target='#modal-$value->cod_noticia'><i class='fa fa-edit'></i> Saiba Mais</a>

       
    </div>";

    endforeach;  
    ?>



</div>
</div>



<?php
    
    foreach($dadosNoticia as $value1): ?>


<div class="modal fade" id="modal-<?php echo $value1->cod_noticia; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4  id="exampleModalLabel"><?php echo $value1->titulo; ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
          <img class="card-img-top" src="imagens/<?php echo $value1->imagem; ?> ">
          </div>
          <div class="form-group">
            
        <p><?php echo $value1->conteudo; ?>
                </p>
          </div>

          <div class="form-group">
                <p>Mais informações: <a href="<?php echo $value1->link_noticia; ?>">Acesse</a></p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>



    <?php endforeach;  
 

?>


<?php

include('includes/rodape.php');

?>