<?php
include_once "model/Documento.php"; 
//incluir a model

class DocumentoController
{
    public function abrirCadastro()
    {
        UsuarioController::validaSessao(); //validando se usuário está logado
        UsuarioController::validaAdministrador();//verificar se é administrador

        include_once "view/cadastro_documento.php";
    }

    public function abrirConsulta()
    { 
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

        $doc = new Documento();
        $dadosDocumento = $doc->consultar();
        include_once "view/consulta_documento.php";
    }

    public function cadastrar()
    {
        UsuarioController::validaSessao(); //validando sessão
       $doc = new Documento();
       $doc->titulo   = $_POST["titulo"];
       $doc->texto  = $_POST["texto"];
       $doc->anexo   = "";
        //upload de imagem
        if($_FILES["anexo"]["error"] == 0)
        {
            $nomeArquivo = $_FILES["anexo"]["name"];
            $nomeTemp    = $_FILES["anexo"]["tmp_name"];
            //pegar a extensão do arquivo
            $info       = new SplFileInfo($nomeArquivo);
            $extensao   = $info->getExtension();
            //gerar novo nome aleatório para imagem
            $novoNome   = md5(microtime()) . ".$extensao";
        // local da pasta no site -> "pasta do site/imagens/materias/img/"
            $pastaDestino = "imagensDoc/$novoNome";
            move_uploaded_file($nomeTemp, $pastaDestino);
            $doc->anexo   = $novoNome; //nome do arquivo para BD
        }//colocar a classe em uso
        //enviar valores do formulário para a classe
     
        
        $doc->cadastrar(); //executar o método que cadastra
        //enviar uma mensagem de confirmação
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='".URL."cadastro-documento';
            </script>";
    }

    public function excluir($cod)
    {
        UsuarioController::validaSessao(); //validando se usuário está logado
        UsuarioController::validaAdministrador();//verificar se é administrador

        $doc = new Documento();
        $doc->cod_documento = $cod;
        $doc->excluir();
        header("Location:".URL."consulta-documento");
    }

    public function editar($cod)
    {
        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();//verificar se é administrador

        //buscar os dados na classe Usuario (model)
        $doc = new Documento();
        $doc->cod_documento = $cod;
        $dadosDocumento = $doc->retornar();
        include_once "view/editar_documento.php"; //exibir a tela de editar dados do usuário
    }

    function atualizar()
    {
        //caso não usuário não esteja logado

        UsuarioController::validaSessao(); //validando sessão
        UsuarioController::validaAdministrador();

       $doc = new Documento();
       $doc->cod_documento    = $_POST["cod_documento"];
       $doc->titulo          = $_POST["titulo"];
       $doc->texto        = $_POST["texto"];
        //$dadosNoticia = $not->retornar();
        //$not->imagem = $dadosNoticia->imagem;
        //upload de imagem
        if($_FILES["anexo"]["error"] == 4 &&$doc->anexo == "")
        {
            $dadosDocumento =$doc->retornar();
           $doc->anexo = $dadosDocumento->anexo;
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
            $nomeArquivo = $_FILES["anexo"]["name"];
            $nomeTemp    = $_FILES["anexo"]["tmp_name"];
            //pegar a extensão do arquivo
            $info       = new SplFileInfo($nomeArquivo);
            $extensao   = $info->getExtension();
            //gerar novo nome
            $novoNome   = md5(microtime()) . ".$extensao";
            $pastaDestino = "imagensDoc/$novoNome";
            move_uploaded_file($nomeTemp, $pastaDestino);
            $doc->anexo   = $novoNome; //nome do arquivo para BD
        }
        $doc->atualizar();
        echo "<script>
                alert('Dados gravados com sucesso!');
                window.location='".URL."consulta-documento';
              </script>";
    }



  


}
?>