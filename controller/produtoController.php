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
        $produtoModel->inserir($produto);
    }

    public function update($id, $data) {
        $produto = $this->popularProduto($data);
        $produto->setId($id);
        $produtoModel = new produto();
        $produtoModel->editar($produto, $id);
    }

    public function destroy($id) {
        $produtoModel = new produto();
        $produtoModel->excluir($id);
    }

    public function filterByCategoria($categoria) {
        $produtoModel = new produto();
        return $produtoModel->consultaPorCategoria($categoria);
    }
    public function filterByNome($nome) {
        $produtoModel = new produto();
        return $produtoModel->consultaPorNome($nome);
    }
    public function filterByEstudio($estudio) {
        $produtoModel = new produto();
        return $produtoModel->consultaPorEstudio($estudio);
    }
    public function filterByValorMenor($valor) {
        $produtoModel = new produto();
        return $produtoModel->consultaPorValorMenor($valor);
    }
    public function filterByValorMaior($valor) {
        $produtoModel = new produto();
        return $produtoModel->consultaPorValorMaior($valor);
    }
    public function filterByValorEntre($min, $max) {
        $produtoModel = new produto();
        return $produtoModel->consultaPorValorEntre($min, $max);
    }
    public function filterByDisponibilidade($disponibilidade) {
        $produtoModel = new produto();
        $disp = filter_var($disponibilidade, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
        return $produtoModel->consultaPorDisponibilidade($disp);
    }

    private function popularProduto($dados) {
        $produto = new Produto();
        $produto->setNome($dados['nome'] ?? '');
        $produto->setMarca($dados['marca'] ?? '');
        $produto->setCategoria($dados['categoria'] ?? '');
        $produto->setDescricao($dados['descricao'] ?? '');
        $produto->setValor($dados['valor'] ?? 0);
        $produto->setDisponibilidade($dados['disponibilidade'] ?? true);
        return $produto;
    }
}
