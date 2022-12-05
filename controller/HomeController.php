<?php
include_once "model/Noticia.php";//incluir a model
include_once "model/Documento.php";//incluir a model

class HomeController
{
    public function abrirHome()
    {
        $noticia = new Noticia();
        $dadosNoticia = $noticia->consultarLimite();
        include_once "site/index.php";
    }

    public function abrirCurso()
    {
        $noticia = new Noticia();
        //$dadosNoticia = $noticia->consultarLimite();
        include_once "site/cursos.php";
    }

    public function abrirSecretaria()
    {
        $doc = new Documento();
        $dadosDocumento = $doc->consultar();
        include_once "site/secretaria.php";
    }   
    
    public function abrirNovidades()
    {
        $noticia = new Noticia();
        $dadosNoticia = $noticia->abrirNoticia();
        include_once "site/novidades.php";
    }  

    public function abrirContato()
    {
        $noticia = new Noticia();
        //$dadosNoticia = $noticia->consultarLimite();
        include_once "site/contato.php";
    } 

    public function abrirNSA()
    {
        $noticia = new Noticia();
        //$dadosNoticia = $noticia->consultarLimite();
        include_once "site/site-nsa.php";
    } 
}

?>