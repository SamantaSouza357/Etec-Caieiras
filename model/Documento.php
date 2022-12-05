<?php
class Documento
{
    //atributos da tabela usuário
    private $cod_documento;
    private $titulo;
    private $texto;
    private $anexo;
  
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

        
        $cmd = $con->prepare("INSERT INTO documentos (titulo, texto, anexo) 
        VALUES (:titulo,:texto,:anexo)");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":titulo",  $this->titulo);
        $cmd->bindParam(":texto",  $this->texto);
        $cmd->bindParam(":anexo", $this->anexo);
        $cmd->execute(); //executar o comando
    }

    public function consultar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM documentos ORDER BY cod_documento DESC"); //comando SQL
        $cmd->execute();//executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }

    public function excluir()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para excluir (DELETE)
        $cmd = $con->prepare("DELETE FROM documentos 
        WHERE cod_documento = :cod_documento");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":cod_documento", $this->cod_documento);
        $cmd->execute(); //executar o comando
    }

    public function atualizar()
    {
        $con = Conexao::conectar();
        $cmd = $con->prepare("UPDATE documentos SET
                                     titulo = :titulo,
                                     texto         = :texto,
                                     anexo    = :anexo
                             WHERE cod_documento = :cod_documento");

        //enviar valores para os parâmetros SQL
        $cmd->bindParam(":cod_documento",   $this->cod_documento);
        $cmd->bindParam(":texto",  $this->texto);
        $cmd->bindParam(":titulo", $this->titulo);
        $cmd->bindParam(":anexo", $this->anexo);
        $cmd->execute();
    }

    public function retornar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM documentos
        WHERE cod_documento = :cod_documento"); //comando SQL
        $cmd->bindParam(":cod_documento", $this->cod_documento);
        $cmd->execute();//executar o comando SQL
        return $cmd->fetch(PDO::FETCH_OBJ);
    }

 

}

?>