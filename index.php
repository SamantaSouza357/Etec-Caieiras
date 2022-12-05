<?php
session_start();//iniciar a sessão

//classes necessárias
include_once "controller/HomeController.php";
include_once "controller/UsuarioController.php";
include_once "controller/CategoriaController.php";
include_once "controller/NoticiaController.php";
include_once "controller/ContatoController.php";
include_once "controller/DocumentoController.php";
include_once "controller/AdminController.php";

//minha url
define('URL','http://localhost/etec2023/');

if(isset($_GET['url']))
{
    $url = explode('/', $_GET['url']);
    switch($url[0])
    {
        //rotas para categoria
        case 'cadastro-categoria':
            $categ = new CategoriaController();
            $categ->abrirCadastro();
        break;
        case 'enviar-categoria':
            $categ = new CategoriaController();
            $categ->cadastrar();
        break;
        
        case 'consulta-categoria':
            $categ = new CategoriaController();
            $categ->abrirConsulta();
        break;
        case 'excluir-categoria':
            $categ = new CategoriaController();
            $categ->excluir($url[1]);
        break;
        case 'editar-categoria':
            $categ = new CategoriaController();
            $categ->editar($url[1]);
        break;
        case 'atualizar-categoria':
            $categ = new CategoriaController();
            $categ->atualizar();
        break;

        //rotas para noticia
        case 'cadastro-noticia':
            $not = new NoticiaController();
            $not->abrirCadastro();
        break;
        
        case 'enviar-noticia':
            $not = new NoticiaController();
            $not->cadastrar();
        break;
        case 'consulta-noticia':
            $not = new NoticiaController();
            $not->abrirConsulta();
        break;
        case 'excluir-noticia':
           $not = new NoticiaController();
           $not->excluir($url[1]);
        break;
        case 'editar-noticia':
            $not = new NoticiaController();
            $not->editar($url[1]);
        break;
        case 'atualizar-noticia':
            $not = new NoticiaController();
            $not->atualizar();
        break;

        //rotas para usuário
        case 'consulta-usuario':
            $usu = new UsuarioController();
            $usu->abrirConsulta();
        break;

        case 'cadastro-usuario':
            $usu = new UsuarioController();
            $usu->abrirCadastro();
        break;

        case 'enviar-usuario':
            $usu = new UsuarioController();
            $usu->cadastrar();
        break;

        case 'excluir-usuario':
            $usu = new UsuarioController();
            $usu->excluir($url[1]);
        break;

        case 'editar-usuario':
            $usu = new UsuarioController();
            $usu->editar($url[1]);
        break;

        case 'atualizar-usuario':
            $usu = new UsuarioController();
            $usu->atualizar();
        break;

        //rotas contato
        case 'consulta-contato':
            $con = new ContatoController();
            $con->abrirConsulta();
        break;

        case 'enviar-contato':
            $doc = new ContatoController();
            $doc->cadastrar();
        break;

        case 'editar-contato':
            $not = new ContatoController();
            $not->editar($url[1]);
        break;

        case 'respContato':
            $resp = new ContatoController();
            $resp->respEmail();
        break;

        //rotas documento
        case 'cadastro-documento':
            $doc = new DocumentoController();
            $doc->abrirCadastro();
        break;
        case 'enviar-documento':
            $doc = new DocumentoController();
            $doc->cadastrar();
        break;
        case 'consulta-documento':
            $doc = new DocumentoController();
            $doc->abrirConsulta();
        break;
        case 'editar-documento':
            $doc = new DocumentoController();
            $doc->editar($url[1]);
        break;
        case 'atualizar-documento':
            $doc = new DocumentoController();
            $doc->atualizar();
        break;

        // rotas login
        case 'login':
            $usu = new UsuarioController();
            $usu->abrirLogin();
        break;

        case 'logar':
            $usu = new UsuarioController();
            $usu->logar();
        break;

        case 'sair':
            $usu = new UsuarioController();
            $usu->sair();
        break;

        case 'novo-usuario':
            $usu = new UsuarioController();
            $usu->novoUsuario();
        break;

        // chamada para área administrativa
        case 'admin':
            $usu = new AdminController();
            $usu->abrirAdmin();
        break;

        //Rotas das páginas do site

        case 'cursos':
                //abrir a página inicial
                $home = new HomeController();
                $home->abrirCurso();
        break;

        case 'secretaria':
            //abrir a página inicial
            $home = new HomeController();
            $home->abrirSecretaria();
        break;    

        case 'novidades':
            //abrir a página inicial
            $home = new HomeController();
            $home->abrirNovidades();
        break;  
        
        case 'contato':
            //abrir a página inicial
            $home = new HomeController();
            $home->abrirContato();
        break; 

        case 'nsa':
            //abrir a página inicial
            $home = new HomeController();
            $home->abrirNSA();
        break; 

        default:
            echo "página não encontrada<br>
            Verificar se existe a rota criada<br>
            Tentando acessar a rota: $url[0]";
            //poderá depois abrir uma página de aviso
        break;

    }

}
else
{
    //abrir a página inicial
    $home = new HomeController();
    $home->abrirHome();
}
?>