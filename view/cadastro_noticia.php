<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- FontAwesome CSS -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>EtecNews - Notícias</title>
</head>
<body>
    <?php include_once "menu.php"; ?>

    <div class="container">
        <div class="row mt-3 px-2">
            <div class="col-sm-8 rounded border mx-auto p-3 shadow">
                <h5 class="text-center">Cadastro de Notícias</h5>
                <form action="<?php echo URL;?>enviar-noticia" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="data">Data da notícia</label>
                        <input type="date" name="data" id="data" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" id="titulo" placeholder="Informe o título da notícia" class="form-control" required>
                    </div>
                    <div class="form-group" required>
                        <label for="categoria">Categoria</label>
                        <select name="categoria" id="categoria" class="form-control">
                            <option value="">Selecione...</option>
                            <option value="Tecnologia">Tecnologia</option>
                          
                         
                            <?php

                            foreach($dadosCategoria as $value)
                            {
                                var_dump($value);
                                echo "<option value='$value->cod_categoria'>$value->nm_categoria</option>";
                            } 
                            ?>
                            


                        </select>
                    </div>
                    <div class="form-group" required>
                        <label for="imagem">Imagem</label>
                        <input class="form-control" type="file" id="imagem" name="imagem">
                    </div>
                    <div class="form-group">
                        <label for="titulo">Conteúdo</label>
                        <textarea name="conteudo" id="conteudo" class="form-control" placeholder="Informe o conteúdo da notícia"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Link</label>
                        <input type="text" name="link_noticia" id="link_noticia" class="form-control" placeholder="Informe o link da noticia"></input>
                    </div>
                    <div class="form-group">
                        <label for="nm_usuario">Nome Usuario</label>
                        <input class="form-control" type="text" id="nm_usuario" name="nm_usuario">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success mt-3">Gravar</button>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
<!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>