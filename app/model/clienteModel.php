<?php

namespace app\model;

use app\config\database;

class clienteModel {

    private $conn;

    public function __construct() {
        $this->conn = new database();
    }

    public function listar($id = null) {
        $query = "select * from cliente";
        if (isset($id)) {
            $query .= "where id=" . $id;
        }
        return $this->conn->query($query)->fetchAll();
    }

    public function busca($id) {
        $query = "select * from cliente";
        $query .= " where id=" . $id;
        return $this->conn->query($query)->fetch();
    }

    public function inserir($cliente) {

        $query = "insert into cliente ("
                . "nome,"
                . "cpf,"
                . "data_nascimento,"
                . "endereco,"
                . "bairro,"
                . "cidade,"
                . "cep,"
                . "estado"
                . ") values("
                . ":nome,"
                . ":cpf,"
                . ":data_nascimento,"
                . ":endereco,"
                . ":bairro,"
                . ":cidade,"
                . ":cep,"
                . ":estado"
                . ")";

        $prepare = $this->conn->prepare($query);

        $prepare->bindValue(':nome', $cliente['nome']);
        $prepare->bindValue(':cpf', str_replace(array('.', '-'), '', $cliente['cpf']));

        $data_nascimento = date_create($cliente['data_nascimento']);

        $prepare->bindValue(':data_nascimento', date_format($data_nascimento, 'Y-m-d'));
        $prepare->bindValue(':endereco', $cliente['endereco']);
        $prepare->bindValue(':bairro', $cliente['bairro']);
        $prepare->bindValue(':cidade', $cliente['cidade']);
        $prepare->bindValue(':cep', str_replace(array('.', '-'), '', $cliente['cep']));
        $prepare->bindValue(':estado', $cliente['estado']);

        return $prepare->execute();
    }

    public function alterar($cliente,$id) {

        $query = "update cliente  "
                . "set "
                . "nome=:nome, "
                . "cpf=:cpf, "
                . "data_nascimento=:data_nascimento, "
                . "endereco=:endereco, "
                . "bairro=:bairro, "
                . "cidade=:cidade, "
                . "cep=:cep, "
                . "estado=:estado "
                . "where id=:id ";

        $prepare = $this->conn->prepare($query);

        $prepare->bindValue(':nome', $cliente['nome']);
        $prepare->bindValue(':cpf', str_replace(array('.', '-'), '', $cliente['cpf']));

        $data_nascimento = date_create($cliente['data_nascimento']);

        $prepare->bindValue(':data_nascimento', date_format($data_nascimento, 'Y-m-d'));
        $prepare->bindValue(':endereco', $cliente['endereco']);
        $prepare->bindValue(':bairro', $cliente['bairro']);
        $prepare->bindValue(':cidade', $cliente['cidade']);
        $prepare->bindValue(':cep', str_replace(array('.', '-'), '', $cliente['cep']));
        $prepare->bindValue(':estado', $cliente['estado']);
        $prepare->bindValue(':id', $id);
        
        return $prepare->execute();
    }

    public function deletar($id) {
        $query = "delete from cliente where id = :id";

        $prepare = $this->conn->prepare($query);
        $prepare->bindValue(':id', $id);

        return $prepare->execute();
    }

}
