<?php



class conexao{

    public static function PegarConexao()
    {

        $conexao = new PDO(DB_DRIVER.':host='.DB_HOSTNAME.DB_PORTA.';dbname='.DB_DATABSE, DB_USER, DB_PASSWORD);
        return $conexao;

    }
}