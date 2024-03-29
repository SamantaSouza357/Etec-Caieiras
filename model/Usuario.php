<?php
class Usuario
{
    //atributos da tabela usuário
    public $codusuario;
    public $nome;
    public $email;
    public $senha;
    public $tipo;

    public function __construct() //será executado ao usar a classe
    {
        include_once "Conexao.php"; //incluindo conexão
    }

    public function cadastrar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("INSERT INTO usuarios (nome, email, senha, tipo) 
        VALUES (:nome,:email,:senha,:tipo)");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":nome",    $this->nome);
        $cmd->bindParam(":email",   $this->email);
        $cmd->bindParam(":senha",   $this->senha);
        $cmd->bindParam(":tipo",  $this->tipo);

        $cmd->execute(); //executar o comando
    }

    public function consultar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM usuarios"); //comando SQL
        $cmd->execute();//executar o comando SQL
        return $cmd->fetchAll(PDO::FETCH_OBJ);
    }

    public function excluir()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para excluir (DELETE)
        $cmd = $con->prepare("DELETE FROM usuarios 
        WHERE cod_usuario = :cod_usuario");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":cod_usuario",    $this->cod_usuario);
        $cmd->execute(); //executar o comando
    }

    public function atualizar()
    {
        $con = Conexao::conectar(); //conectar no BD
        //comando SQL para cadastrar (INSERT)
        $cmd = $con->prepare("UPDATE usuarios SET
                                        nome    = :nome,
                                        email   = :email,
                                        senha   = :senha,
                                        tipo  = :tipo
                            WHERE cod_usuario = :cod_usuario");
        //enviando o valor dos parâmetros
        $cmd->bindParam(":cod_usuario",      $this->cod_usuario);
        $cmd->bindParam(":nome",            $this->nome);
        $cmd->bindParam(":email",           $this->email);
        $cmd->bindParam(":senha",           $this->senha);
        $cmd->bindParam(":tipo",          $this->tipo);

        $cmd->execute(); //executar o comando
    }

    public function retornar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM usuarios
        WHERE cod_usuario = :cod_usuario"); //comando SQL
        $cmd->bindParam(":cod_usuario", $this->cod_usuario);
        $cmd->execute();//executar o comando SQL
        return $cmd->fetch(PDO::FETCH_OBJ);
    }

    public function logar()
    {
        $con = Conexao::conectar();//acessar o BD
        $cmd = $con->prepare("SELECT * FROM usuarios
        WHERE email = :email"); //comando SQL
        $cmd->bindParam(":email", $this->email);
        $cmd->execute();//executar o comando SQL
        return $cmd->fetch(PDO::FETCH_OBJ);
    }

}

?>