<?php

namespace app\controller;

use app\lib\Controller;
use app\model\clienteService;

class IndexController extends Controller {

    private $service;

    public function __construct() {
        $this->service = new clienteService();   
        parent::__construct();
    }

    public function listar() {
        $clientes = $this->service->listar();
        
        $this->view('index/listar',array('clientes' => $clientes));
    }

    public function alterar() {
        if (isset($_GET['id'])) {
            $cliente = $this->service->busca($_GET['id']);
            if ($_POST) {
                if ($this->service->alterar($_POST, $_GET['id'])) {
                    echo "<script>"
                    . "alert('Alterado com sucesso!');"
                    . "document.location = 'index.php';"
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
            if ($this->service->deletar($_GET['id'])) {
                echo "<script>"
                . "alert('Deletado com sucesso!');"
                . "document.location = 'index.php';"
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
            if ($this->service->inserir($_POST)) {
                echo "<script>"
                . "alert('Cadastrado com sucesso!');"
                . "document.location = 'index.php';"
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
