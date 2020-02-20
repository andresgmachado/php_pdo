<?php


class Categoria
{

    public $id;
    public $nome;

    public function __construct($id = false)
    {
        if ($id)
        {
            $this->id = $id;
            $this->Carregar();
        }
    }

    
    public function listar()
    {
    
        $query = "SELECT id, nome FROM categorias";
        $conexao = conexao::PegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir($nome)
    {
        $query = "insert into categorias (nome) values ('".$this->nome."')";
        $conexao = conexao::PegarConexao();
        $conexao->exec($query);
    }

    public function Atualizar()
    {
        $query = ("Update categorias set nome = '".$this->nome."' where id =".$this->id);
        $conexao = conexao::PegarConexao();
        $conexao->exec($query);
    }

    public function Carregar()
    {
        $query ="SELECT id, nome FROM categorias where id =".$this->id;
        $conexao = conexao::PegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach($lista as $linha)
        {
           $this->nome = $linha['nome'];
        }
        
    }

    public function Excluir()
    {
        $query ="DELETE FROM categorias where id =".$this->id;
        $conexao = conexao::PegarConexao();
        $conexao->exec($query);
    }
}