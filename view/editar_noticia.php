<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="<?php echo URL; ?>recursos/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- FontAwesome CSS -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Notícias Etec</title>
</head>
<body>
<?php include_once "menu.php"; ?>
<div class="container">
    <div class="row mt-3">
        <div class="col-sm-8 mx-auto">

            <div class="card">
                <div class="card-header bg-primary text-white">
                Editar Notícia
                    <a href="<?php echo URL;?>consulta-noticia" class="btn btn-secondary btn-sm float-right"><i class="fa fa-arrow-left"></i> Consultar notícia</a>
                </div>
                <div class="card-body">
                <form action="<?php echo URL . 'atualizar-noticia'; ?>" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="cod_noticia" value="<?php echo $dadosNoticia->cod_noticia;?>">    

                    <div class="form-group">
                        <label>Data:</label>
                        <input type="date" name="data" class="form-control" value="<?php echo $dadosNoticia->data ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Título:</label>
                        <input type="text" name="titulo" class="form-control" value="<?php echo $dadosNoticia->titulo;?>" required>
                    </div>
                    <div class="form-group">
                        <label>Categoria:</label>
                        <select name="categoria" id="cod_categoria" class="form-control">
                            <?php

                                    $cat = new Categoria();
                                    $dadosCategoria = $cat->consultar();
                                foreach($dadosCategoria as $value)
                                {
                                    $selected = $value->cod_categoria == 
                                    $dadosNoticia->cod_categoria ? "selected" : "";
                                    
                                    echo "<option value='$value->nm_categoria' $selected>
                                            $value->nm_categoria
                                          </option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Conteúdo:</label>
                        <textarea name="conteudo" class="form-control"><?php echo $dadosNoticia->conteudo;?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Imagem adicionada</label>
                        <img src="<?php echo URL."imagens/$dadosNoticia->imagem";?>" width='150px'  class="rounded d-block">
                    </div>
                    
                    <div class="form-group">
                        <label>Trocar imagem</label>
                        <input type="file" name="imagem" accept="image/*" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Link da Noticia:</label>
                        <input type="text" name="link_noticia" class="form-control" value="<?php echo $dadosNoticia->link_noticia;?>" required>
                    </div>
                    <div class="form-group">
                        <label>Título:</label>
                        <input type="text" name="nm_usuario" class="form-control" value="<?php echo $dadosNoticia->nm_usuario;?>" required>
                    </div>

                   
                    <input type="submit" class="btn btn-primary btn-block" value="Gravar">
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- JS Query--> 
<<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script>
    $("#ativo").
    val("<?php echo $dadosNoticia->ativo;?>");
</script>
</body>
</html>