<?php
require_once __DIR__ . '/../model/Produto.php';

class produtoController {

    public function index() {
        $produtoModel = new Produto();
        return $produtoModel->consulta();
    }

    public function show($id) {
        $produtoModel = new Produto();
        return $produtoModel->consultaID($id);
    }

    public function store($data) {
        $produto = $this->popularProduto($data);
        $produtoModel = new Produto();
        return $produtoModel->inserir($produto);
    }

    public function update($id, $data) {
        $produto = $this->popularProduto($data);
        $produto->setId($id);
        $produtoModel = new Produto();
        return $produtoModel->editar($produto, $id);
    }

    public function destroy($id) {
        $produtoModel = new Produto();
        return $produtoModel->excluir($id);
    }

    public function filterByCategoria($categoria) {
        $produtoModel = new Produto();
        return $produtoModel->consultaPorCategoria($categoria);
    }

    public function filterByNome($nome) {
        $produtoModel = new Produto();
        return $produtoModel->consultaPorNome($nome);
    }

    public function filterByIdade($idade) {
        $produtoModel = new Produto();
        return $produtoModel->consultaPorIdade($idade);
    }

    public function filterByEstudio($estudio) {
        $produtoModel = new Produto();
        return $produtoModel->consultaPorEstudio($estudio);
    }

    public function filterByValorMenor($valor) {
        $produtoModel = new Produto();
        return $produtoModel->consultaPorValorMenor($valor);
    }

    public function filterByValorMaior($valor) {
        $produtoModel = new Produto();
        return $produtoModel->consultaPorValorMaior($valor);
    }

    public function filterByValorEntre($min, $max) {
        $produtoModel = new Produto();
        return $produtoModel->consultaPorValorEntre($min, $max);
    }

    public function filterByDisponibilidade($disponibilidade) {
        $produtoModel = new Produto();
        $disp = filter_var($disponibilidade, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
        return $produtoModel->consultaPorDisponibilidade($disp);
    }

    private function popularProduto($dados) {
        $produto = new Produto();
        $produto->setNome($dados['nome'] ?? '');
        $produto->setImagem($dados['imagem'] ?? '');
        $produto->setEstudio($dados['Estudio'] ?? $dados['estudio'] ?? '');
        $produto->setCategoria($dados['categoria'] ?? '');
        $produto->setIdade($dados['idade'] ?? '');
        $produto->setValor($dados['valor'] ?? 0);
        $produto->setDisponibilidade($dados['disponibilidade'] ?? true);
        return $produto;
    }
}