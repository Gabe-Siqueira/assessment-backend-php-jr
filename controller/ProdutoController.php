<?php

class ProdutoController {

    /**
     * Tela listar todos os produtos
     */
    public function listar() {
        $produtos = array();
        require 'view/produto/listar.html';
    }

    /**
     * Tela inserir novo produto
     */
    public function adicionar() {
        require 'view/produto/adicionar.html';
    }

    /**
     * Salvar dados do cliente
     */
    public function gravar() {
        header('Location: listar');
    }

    /**
     * Tela editar dados do produtos
     */
    public function editar($id) {
        $produto = array();
        require 'view/produto/editar.html';
    }

    /**
     * Atualizar dados do produto pelo id
     */
    public function atualizar($id) {
        
    }

    /**
     * Deletar produto pelo id
     */
    public function deletar($id) {
        
    }

}
?>
