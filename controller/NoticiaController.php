<?php
include_once "model/Noticia.php"; 
include_once "model/Categoria.php";//incluir a model

class NoticiaController
{
    public function abrirCadastro()
    {
        UsuarioController::validaSessao(); //validando se usuário está logado
        UsuarioController::validaAdministrador();//verificar se é administrador

        include_once "view/cadastro_noticia.php";
    }

    public function abrirConsulta()
    { 
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

        $noticia = new Noticia();
        $dadosNoticia = $noticia->consultar();
        include_once "view/consulta_noticia.php";
    }

    public function cadastrar()
    {
        UsuarioController::validaSessao(); //validando sessão
        $noticia = new Noticia();
        $noticia->data   = $_POST["data"];
        $noticia->titulo  = $_POST["titulo"];
        $noticia->categoria  = $_POST["categoria"];
        $noticia->conteudo   = $_POST["conteudo"];
        $noticia->nm_usuario = $_POST["nm_usuario"];
        $noticia->link_noticia = $_POST["link_noticia"];
        $noticia->imagem   = "";
        //upload de imagem
        if($_FILES["imagem"]["error"] == 0)
        {
            $nomeArquivo = $_FILES["imagem"]["name"];
            $nomeTemp    = $_FILES["imagem"]["tmp_name"];
            //pegar a extensão do arquivo
            $info       = new SplFileInfo($nomeArquivo);
            $extensao   = $info->getExtension();
            //gerar novo nome aleatório para imagem
            $novoNome   = md5(microtime()) . ".$extensao";
        // local da pasta no site -> "pasta do site/imagens/materias/img/"
            $pastaDestino = "imagens/$novoNome";
            move_uploaded_file($nomeTemp, $pastaDestino);
            $noticia->imagem   = $novoNome; //nome do arquivo para BD
        }//colocar a classe em uso
        //enviar valores do formulário para a classe
     
        
        $noticia->cadastrar(); //executar o método que cadastra
        //enviar uma mensagem de confirmação
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='".URL."cadastro-noticia';
            </script>";
    }

    public function excluir($cod)
    {
        UsuarioController::validaSessao(); //validando se usuário está logado
        UsuarioController::validaAdministrador();//verificar se é administrador

        $noticia = new Noticia();
        $noticia->cod_noticia = $cod;
        $noticia->excluir();
        header("Location:".URL."consulta-noticia");
    }

    public function editar($cod)
    {
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

        //buscar os dados na classe Usuario (model)
        $noticia = new Noticia();
        $noticia->cod_noticia = $cod;
        $dadosNoticia = $noticia->retornar();
        include_once "view/editar_noticia.php"; //exibir a tela de editar dados do usuário
    }

    function atualizar()
    {
        //caso não usuário não esteja logado

        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();

        $noticia = new Noticia();
        $noticia->cod_noticia     = $_POST["cod_noticia"];
        $noticia->data          = $_POST["data"];
        $noticia->titulo        = $_POST["titulo"];
        $noticia->categoria   = $_POST["categoria"];
        $noticia->conteudo      = $_POST["conteudo"];
        $noticia->nm_usuario         = $_POST["nm_usuario"];
        $noticia->link_noticia         = $_POST["link_noticia"];
        //$dadosNoticia = $not->retornar();
        //$not->imagem = $dadosNoticia->imagem;
        //upload de imagem
        if($_FILES["imagem"]["error"] == 4 && $noticia->imagem == "")
        {
            $dadosNoticia = $noticia->retornar();
            $noticia->imagem = $dadosNoticia->imagem;
            /*
            $nomeTemp    = $_FILES["imagem"]["tmp_name"];
            $pastaDestino = "recursos/img/".$not->imagem;
            //pegar a extensão do arquivo
            $info       = new SplFileInfo($nomeTemp);
            $extensao   = $info->getExtension();
            $not->imagem   = $nomeTemp . ".$extensao";
            move_uploaded_file($nomeTemp, $pastaDestino);
            */
        }
        else
        {
            $nomeArquivo = $_FILES["imagem"]["name"];
            $nomeTemp    = $_FILES["imagem"]["tmp_name"];
            //pegar a extensão do arquivo
            $info       = new SplFileInfo($nomeArquivo);
            $extensao   = $info->getExtension();
            //gerar novo nome
            $novoNome   = md5(microtime()) . ".$extensao";
            $pastaDestino = "imagens/$novoNome";
            move_uploaded_file($nomeTemp, $pastaDestino);
            $noticia->imagem   = $novoNome; //nome do arquivo para BD
        }
        $noticia->atualizar();
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='".URL."consulta-noticia';
              </script>";
    }



}
?>