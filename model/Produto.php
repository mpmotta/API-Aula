<?php
error_reporting(E_ALL & ~E_NOTICE);

require_once __DIR__ . '/../config.php';

class Produto {
    private $pdo;
    private $tabela = 'jogos';

    // Propriedades
    private $id;
    private $nome;
    private $imagem;
    private $estudio;
    private $categoria;
    private $idade;
    private $valor;
    private $disponibilidade;
    
    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }
    
    public function consulta() {
        $sql = "SELECT * FROM $this->tabela";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function consultaID($id) {
        $sql = "SELECT * FROM $this->tabela WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Inserir (sem imagem)
    public function inserir(Produto $produto) {
        $sql = "INSERT INTO $this->tabela (nome, imagem, estudio, categoria, idade, valor, disponibilidade)
                VALUES (:nome, :imagem, :estudio, :categoria, :idade, :valor, :disponibilidade)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nome', $produto->getNome(), PDO::PARAM_STR);
        $stmt->bindParam(':marca', $produto->getMarca(), PDO::PARAM_STR);
        $stmt->bindParam(':categoria', $produto->getCategoria(), PDO::PARAM_STR);
        $stmt->bindParam(':descricao', $produto->getDescricao(), PDO::PARAM_STR);
        $stmt->bindParam(':valor', $produto->getValor());
        $stmt->bindParam(':disponibilidade', $produto->getDisponibilidade(), PDO::PARAM_BOOL);
        return $stmt->execute();
    }

    // Editar tudo
    public function editar(produto $produto, $id) {
        $sql = "UPDATE $this->tabela SET 
                    nome = :nome, 
                    imagem = :imagem,
                    estudio = :estudio, 
                    categoria = :categoria, 
                    idade = :idade, 
                    valor = :valor, 
                    disponibilidade = :disponibilidade
                WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nome', $produto->getNome(), PDO::PARAM_STR);
        $stmt->bindParam(':imagem', $produto->getImagem(), PDO::PARAM_STR);
        $stmt->bindParam(':estudio', $produto->getEstudio(), PDO::PARAM_STR);
        $stmt->bindParam(':categoria', $produto->getCategoria(), PDO::PARAM_STR);
        $stmt->bindParam(':idade', $produto->getIdade(), PDO::PARAM_STR);
        $stmt->bindParam(':valor', $produto->getValor());
        $stmt->bindParam(':disponibilidade', $produto->getDisponibilidade(), PDO::PARAM_BOOL);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
    
    // Atualizar (só imagem)
    public function atualizarImagem($id, $nomeImagem) {
        $sql = "UPDATE $this->tabela SET imagem = :imagem WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':imagem', $nomeImagem, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function excluir($id) {
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
    
    // --- Métodos de Filtro Completos ---
    
    public function consultaPorCategoria($categoria) {
        $sql = "SELECT * FROM $this->tabela WHERE categoria = :categoria";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':categoria', $categoria, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function consultaPorNome($nome) {
        $sql = "SELECT * FROM $this->tabela WHERE nome LIKE :nome";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':nome', '%' . $nome . '%', PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function consultaPorIdade($idade) {
        $sql = "SELECT * FROM $this->tabela WHERE idade LIKE :idade";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':idade', '%' . $idade . '%', PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function consultaPorEstudio($estudio) {
        $sql = "SELECT * FROM $this->tabela WHERE estudio LIKE :estudio";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':estudio', '%' . $estudio . '%', PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function consultaPorValorMenor($valor) {
        $sql = "SELECT * FROM $this->tabela WHERE valor < :valor";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':valor', $valor);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function consultaPorValorMaior($valor) {
        $sql = "SELECT * FROM $this->tabela WHERE valor > :valor";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':valor', $valor);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function consultaPorValorEntre($min, $max) {
        $sql = "SELECT * FROM $this->tabela WHERE valor BETWEEN :min AND :max";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':min', $min);
        $stmt->bindParam(':max', $max);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function consultaPorDisponibilidade($disp) {
        $sql = "SELECT * FROM $this->tabela WHERE disponibilidade = :disp";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':disp', $disp, PDO::PARAM_BOOL);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    // --- Fim dos Filtros ---


    // Getters e setters
    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }
    public function getNome() { return $this->nome; }
    public function setNome($nome) { $this->nome = $nome; }
    public function getImagem() { return $this->imagem; }
    public function setImagem($imagem) { $this->imagem = $imagem; }
    public function getEstudio() { return $this->estudio; }
    public function setEstudio($estudio) { $this->estudio = $estudio; }
    public function getCategoria() { return $this->categoria; }
    public function setCategoria($categoria) { $this->categoria = $categoria; }
    public function getIdade() { return $this->idade; }
    public function setIdade($idade) { $this->idade = $idade; }
    public function getValor() { return $this->valor; }
    public function setValor($valor) { return $this->valor = $valor; }
    public function getDisponibilidade() { return $this->disponibilidade; }
    public function setDisponibilidade($disponibilidade) { $this->disponibilidade = $disponibilidade; }
}