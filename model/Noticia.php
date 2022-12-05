<?php
class Noticia
{
    //atributos da tabela usuário
    private $cod_noticia;
    private $categoria;
    private $titulo;
    private $conteudo;
    private $data;
    private $imagem;
    private $nm_usuario;
    private $link_noticia;
  
    //get / set
    function __get($atributo)
    {
        return $this->$atributo;
    }
    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

 
    
    public function __construct() //será executado ao usar a classe
    {
        include_once "Conexao.php"; //incluindo conexão
    }

    public function cadastrar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)

        
        $cmd = $con->prepare("INSERT INTO noticia (categoria, titulo, conteudo, data, imagem, nm_usuario, link_noticia) 
        VALUES (:categoria,:titulo,:conteudo, :data, :imagem, :nm_usuario, link_noticia)");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":categoria",  $this->categoria);
        $cmd->bindParam(":titulo",  $this->titulo);
        $cmd->bindParam(":conteudo", $this->conteudo);
        $cmd->bindParam(":data", $this->data);
        $cmd->bindParam(":imagem", $this->imagem);
        $cmd->bindParam(":link_noticia", $this->link_noticia);
        $cmd->bindParam(":nm_usuario", $this->nm_usuario);
      

        $cmd->execute(); //executar o comando
    }

    public function consultar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM noticia"); //comando SQL
        $cmd->execute();//executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }

    public function consultarLimite()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM noticia ORDER BY cod_noticia  DESC LIMIT 3"); //comando SQL
        $cmd->execute();//executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }    


    public function excluir()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para excluir (DELETE)
        $cmd = $con->prepare("DELETE FROM noticia 
        WHERE cod_noticia = :cod_noticia");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":cod_noticia",    $this->cod_noticia);
        $cmd->execute(); //executar o comando
    }

    public function atualizar()
    {
        $con = Conexao::conectar();
        $cmd = $con->prepare("UPDATE noticia SET
                                     data = :data,
                                     titulo         = :titulo,
                                     categoria    = :categoria,
                                     conteudo       = :conteudo,
                                     imagem         = :imagem,
                                     link_noticia         = :link_noticia,
                                     nm_usuario          = :nm_usuario
                             WHERE cod_noticia = :cod_noticia");

        //enviar valores para os parâmetros SQL
        $cmd->bindParam(":cod_noticia",   $this->cod_noticia);
        $cmd->bindParam(":data",        $this->data);
        $cmd->bindParam(":titulo",      $this->titulo);
        $cmd->bindParam(":categoria", $this->categoria);
        $cmd->bindParam(":conteudo",    $this->conteudo);
        $cmd->bindParam(":imagem",      $this->imagem);
        $cmd->bindParam(":link_noticia",      $this->link_noticia);
        $cmd->bindParam(":nm_usuario",       $this->nm_usuario);

        $cmd->execute();
    }

    public function retornar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM noticia
        WHERE cod_noticia = :cod_noticia"); //comando SQL
        $cmd->bindParam(":cod_noticia", $this->cod_noticia);
        $cmd->execute();//executar o comando SQL
        return $cmd->fetch(PDO::FETCH_OBJ);
    }

    public function abrirNoticia()
    { 
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM noticia"); //comando SQL
        $cmd->execute();//executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }

 

}

?>