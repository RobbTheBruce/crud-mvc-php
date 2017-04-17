<?php

namespace app\controller;

use app\lib\Controller;
use app\model\clienteModel;

class ClienteController extends Controller {

    private $model;

    public function __construct($route = null) {
        $this->model = new clienteModel();   
        parent::__construct($route);
    }

    public function listar() {
        $clientes = $this->model->listar();
        $this->view('cliente/listar',array('clientes' => $clientes));
    }


}
