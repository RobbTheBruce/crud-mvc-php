<?php

namespace app\controller;

use app\lib\Controller;
use app\model\clienteModel;

class IndexController extends Controller {

    private $model;

    public function __construct($route = null) {
        $this->model = new clienteModel();   
        parent::__construct($route);
    }

    public function listar() {
        $clientes = $this->model->listar();
        $this->view('index/listar',array('clientes' => $clientes));
    }

    public function alterar($id) {
        if (isset($id)) {
            $cliente = $this->model->busca($id);
            if ($_POST) {
                if ($this->model->alterar($_POST, $id)) {
                    echo "<script>"
                    . "alert('Alterado com sucesso!');"
                    . "document.location = '/index';"
                    . "</script>";
                } else {
                    echo "<script>"
                    . "alert('Não foi possivel alterar!');"
                    . "history.go(-1);"
                    . "</script>";
                }
            } else {
                $this->view('index/formularioCliente',array('cliente' => $cliente));
            }
        }
    }

    public function deletar() {
        if (isset($_GET['id'])) {
            if ($this->model->deletar($_GET['id'])) {
                echo "<script>"
                . "alert('Deletado com sucesso!');"
                . "document.location = '/index';"
                . "</script>";
            } else {
                echo "<script>"
                . "alert('Não foi possivel deletar!');"
                . "history.go(-1);"
                . "</script>";
            }
        }
    }

    public function inserir() {
        if ($_POST) {
            if ($this->model->inserir($_POST)) {
                echo "<script>"
                . "alert('Cadastrado com sucesso!');"
                . "document.location = /index';"
                . "</script>";
            } else {
                echo "<script>"
                . "alert('Não foi possivel cadastrar!');"
                . "history.go(-1);"
                . "</script>";
            }
        } else {
            $this->view('index/formularioCliente');
        }
    }

}
