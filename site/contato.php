<?php

include('includes/topo.php');
include('includes/menu.php');

?>



<div class="container">
<form action="<?php echo URL;?>enviar-contato" method="post" enctype="multipart/form-data">
        <div class="form-group mt-4">
            <label for="exampleFormControlInput1 ">Nome</label>
            <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Digite seu nome">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1 ">E-mail</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Assunto</label>
            <select name="assunto" class="form-control" id="exampleFormControlSelect2">
                <option>Vestibulinho</option>
                <option>Cursos</option>
                <option>Unidade</option>
                <option>Outros</option>

            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensagem</label>
            <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <!-- envia a data e hora atual -->
        <input type="hidden" name="data" value="<?php echo date('Y-m-d H:i:s');?>">

        <div class="form-goup mb-5">
            <button class="btn btn-rounded btn-success" type="submit">Enviar</button>
        </div>
    </form>

</div>




<div class="fundo-etec">
    <div class="transparencia">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 dadosFooter">
                        <div class="fb-page" data-href="https://pt-br.facebook.com/eteccaieiras/" data-tabs="timeline"
                            data-width="300" data-height="370" data-small-header="true"
                            data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"></div>
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Feteccaieiras%2F&tabs=timeline&width=210&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=270182936952217"
                            width="300" height="370" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                <div class="col-md-3 dadosFooter">

                    <h1 class="titulo"> Faça contato</h1>
                    <p>
                        <i class="fa fa-envelope" style="margin-right:4px;"></i> e245.contato@etec.sp.gov.br
                    </p>

                    <p>
                        <i class="fa fa-phone" style="margin-right:4px;"></i> (11) 4163 - 4659
                    </p>
                    <p>
                        <i class="fa fa-whatsapp" style="margin-right:4px;"></i> (11) 4163 - 4655
                    </p>
                    <p>
                        <i class="fa fa-location-arrow"></i> Rua Ermênio de Oliveira Penteado, 30 - Jardim Helena,
                        Caieiras - SP
                    </p>

                </div>
                <div class="col-md-4 dadosFooter">
                    <h1 class="titulo"> Encontre-nos</h1>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14648.190114431149!2d-46.7138662!3d-23.3864978!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdc086b7d3cfc7f4f!2sEtec%20de%20Caieiras!5e0!3m2!1spt-BR!2sbr!4v1663536932611!5m2!1spt-BR!2sbr"
                        width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Etec de Caieiras | © Todos os direitos reservados</p>
    </footer>
</div>



</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v15.0"
    nonce="lhEJmTxt"></script>
</body>

</html>