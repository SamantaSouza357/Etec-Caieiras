<?php
class Categoria
{
    //atributos da tabela usuário
    public $cod_categoria;
    public $nm_categoria;

    public function __construct() //será executado ao usar a classe
    {
        include_once "Conexao.php"; //incluindo conexão
    }

    public function cadastrar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("INSERT INTO categoria_noticias (nm_categoria) 
        VALUES (:nm_categoria)");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":nm_categoria", $this->nm_categoria);
        $cmd->execute(); //executar o comando
    }

    public function consultar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM categoria_noticias"); //comando SQL
        $cmd->execute();//executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }

    public function excluir()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para excluir (DELETE)
        $cmd = $con->prepare("DELETE FROM categoria_noticias  
        WHERE cod_categoria = :cod_categoria");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":cod_categoria",    $this->cod_categoria);
        $cmd->execute(); //executar o comando
    }

    public function atualizar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("UPDATE categoria_noticias  SET
                                 nm_categoria   = :nm_categoria
                            WHERE cod_categoria = :cod_categoria");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":cod_categoria",      $this->cod_categoria);
        $cmd->bindParam(":nm_categoria",     $this->nm_categoria);
        $cmd->execute(); //executar o comando
    }

    public function retornar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM categoria_noticias  
        WHERE cod_categoria = :cod_categoria"); //comando SQL
        $cmd->bindParam(":cod_categoria", $this->cod_categoria);
        $cmd->execute();//executar o comando SQL
        return $cmd->fetch(PDO::FETCH_OBJ);
    }

}

?>