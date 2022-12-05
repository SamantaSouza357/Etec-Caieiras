<?php
include('includes/topo.php');
include('includes/menu.php');

?>

     
    
        <div class="container">
            <div class="col-md-12 cursos">
                <div class="row">
                    <div class="col-sm-5 col-md-6 space-bottom-xs espacamento ">
                        <h5>Tecnico integrado ao ensino médio</h5>
                        <p>A ETEC Paulo do Carmo Monteiro é uma escola técnica profissionalizante que oference ensino médio integrado e cursos técnicos na área de Administração, informatica para internet e marketing.</p>
                        <a href="cursos" class="btn btn-rounded btn-success">Saiba Mais </a>
                    </div>
                    <div class="col-sm-7 col-md-6 flexbox center-xs middle-xs image-group-2-img padding-top-bottom ">
                        <img src="https://t.ctcdn.com.br/1oUyH3_VxAFMXR6YwI_DYmUgKBE=/1024x0/smart/filters:format(webp)/i569772.jpeg" alt="" class="img-1 rounded mdc-elevation--z10" data-size="250x200">
                        <img src="https://www.undb.edu.br/hubfs/administra%C3%A7%C3%A3o%20undb-1.jpg" alt="" class="img-2 rounded mdc-elevation--z10" data-size="250x200">
                    </div>
                </div>
            </div>
        </div>
        <div class="container cursos">
            <div class="col-md-12 ">
                <div class="row">
                    <div class="col-sm-5 col-md-6  space-bottom-xs mt-sm-5 espacamento">
                        <h5>Cursos Tecnicos</h5>
                        <p>A ETEC Paulo do Carmo Monteiro é uma escola técnica com foco em formar profissionais qualificados para o Mercado do Trabalho, atráves dos cursos de administração, segurança do trabalho e informatica para internet</p>
                        <a href="cursos" class="btn btn-rounded btn-success">Saiba Mais </a>
                    </div>
                    <div class="col-sm-7 col-md-6 flexbox center-xs middle-xs image-group-2-img padding-top-bottom ">
                        <img src="https://wp.eucapacito.com.br/wp-content/uploads/2021/04/AdobeStock_241083104-scaled.jpeg" alt="" class="img-1 rounded mdc-elevation--z10" data-size="250x200">
                        <img src="https://www.uemg.br/images/cursos/administracao.jpg" alt="" class="img-2 rounded mdc-elevation--z10" data-size="250x200">
                    </div>
                </div>
            </div>
        </div>


        <h1 class="text-center mt-5">Noticias</h1>


        <?php
            foreach($dadosNoticia as $value):

                echo  "<div class='noticias container mt-5'>
            <div class='card mb-3'>
                <div class='row no-gutters'>
                    <div class='col-sm-5 col-md-6 col-lg-5 '>
                        <img class='imgNoticia' src='imagens/$value->imagem' alt='...'>
                    </div>
                    <div class='col-sm-7 col-md-6 col-lg-7'>
                        <div class='card-body'>
                            <h5 class='card-title'>$value->titulo</h5>
                            <p class='card-text'>$value->conteudo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
        
        endforeach;  
        ?>


        </div>

      <div class="container acessoViacao mt-5">
            <h3 class="text-center pt-4">Linhas de Ônibus mais próximas a ETEC de Caieiras</h3>
            <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                         <div class="card mt-4 mb-5" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center justify-content-center">
                                    <i class="fa fa-bus mr-1"></i>
                                    <h4 class="m-0">331</h4>
                            </li>
                                <li class="list-group-item">
                                    <p class="text-center">Terminal rodoviario Barra Funda</p>
                                </li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                         <div class="card mt-4 mb-5" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center justify-content-center">
                                    <i class="fa fa-bus mr-1"></i>
                                    <h4 class="m-0">070</h4>
                            </li>
                                <li class="list-group-item">
                                    <p class="text-center">Vera Tereza - Morro Grande</p>
                                </li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                         <div class="card mt-4 mb-5" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center justify-content-center">
                                    <i class="fa fa-bus mr-1"></i>
                                    <h4 class="m-0">060</h4>
                            </li>
                                <li class="list-group-item">
                                    <p class="text-center" >Jardim Nova Era - Laranjeiras</p>
                                </li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                         <div class="card mt-4 mb-5" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center justify-content-center">
                                    <i class="fa fa-bus mr-1"></i>
                                    <h4 class="m-0">70A</h4>
                            </li>
                                <li class="list-group-item">
                                    <p class="text-center">Vera Tereza - Morro Grande</p>
                                </li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center justify-content-center ">
                         <div class="card mt-4 mb-5" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center justify-content-center">
                                    <i class="fa fa-bus mr-1"></i>
                                    <h4 class="m-0">080</h4>
                            </li>
                                <li class="list-group-item">
                                    <p class="text-center">Estação Caieiras - Jardim Helena</p>
                                </li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                         <div class="card mt-4  mb-5" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center justify-content-center">
                                    <i class="fa fa-bus mr-1"></i>
                                    <h4 class="m-0">070B</h4>
                            </li>
                                <li class="list-group-item">
                                    <p class="text-center">Vera Tereza - Santa Inês</p>
                                </li>
                            </ul>
                            </div>
                        </div>
               
                    </div>
            </div>
      </div>


        </div>

        <?php

include('includes/rodape.php');

?>
