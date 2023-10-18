<?php

class ClienteController {

    /**
     * Tela listar todos os clientes
     */
    public function listar() {
        $clientes = array();
        require 'view/cliente/listar.html';
    }

    /**
     * Tela inserir novo cliente
     */
    public function adicionar() {
        require 'view/cliente/adicionar.html';
    }

    /**
     * Salvar dados do cliente
     */
    public function gravar() {
        header('Location: listar');
    }

    /**
     * Tela editar dados do cliente pelo id
     */
    public function editar($id) {
        $cliente = array();
        require 'view/cliente/editar.html';
    }

    /**
     * Atualizar dados do cliente
     */
    public function atualizar($id) {
        
    }

    /**
     * Deletar cliente
     */
    public function deletar($id) {
        
    }

}
?>
