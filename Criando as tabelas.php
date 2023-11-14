<?php

use Comex\Modelo\Cliente\Cliente;

class ClienteDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function salvar(Cliente $cliente) {
        $stmt = $this->pdo->prepare('INSERT INTO Cliente (nome, email, celular, endereco, totalCompras) VALUES (?, ?, ?, ?, ?)');
        $stmt->execute([$cliente->getNome(), $cliente->getEmail(), $cliente->getCelular(), $cliente->getEndereco(), $cliente->getTotalCompras()]);
        return $this->pdo->lastInsertId();
    }

    public function buscar($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM Cliente WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar(Cliente $cliente) {
        $stmt = $this->pdo->prepare('UPDATE Cliente SET nome = ?, email = ?, celular = ?, endereco = ?, totalCompras = ? WHERE id = ?');
        $stmt->execute([$cliente->getNome(), $cliente->getEmail(), $cliente->getCelular(), $cliente->getEndereco(), $cliente->getTotalCompras()]);
    }

    public function apagar($id) {
        $stmt = $this->pdo->prepare('DELETE FROM Cliente WHERE id = ?');
        $stmt->execute([$id]);
    }
}
?>
<?php 
use Comex\Modelo\Produto\Pedido;

class PedidoDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function salvar(Pedido $pedido) {
        $stmt = $this->pdo->prepare('INSERT INTO Pedido (clienteId, dataPedido, valorTotal, status) VALUES (?, ?, ?, ?)');
        $stmt->execute([$pedido->getCliente(), $pedido->getProdutos() ]);
        return $this->pdo->lastInsertId();
    }

    public function buscar($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM Pedido WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar(Pedido $pedido) {
        $stmt = $this->pdo->prepare('UPDATE Pedido SET clienteId = ?, dataPedido = ?, valorTotal = ?, status = ? WHERE id = ?');
        $stmt->execute([$pedido->getCliente(), $pedido->getProdutos()]);
    }

    public function apagar($id) {
        $stmt = $this->pdo->prepare('DELETE FROM Pedido WHERE id = ?');
        $stmt->execute([$id]);
    }
}
?>
<?php 
use Comex\Modelo\Produto\Produto;


class ProdutoDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function salvar(Produto $produto) {
        $stmt = $this->pdo->prepare('INSERT INTO Produto (nome, preco, quantidadeEmEstoque) VALUES (?, ?, ?)');
        $stmt->execute([$produto->getNome(), $produto->getPreco(), $produto->getQuantidade()]);
        return $this->pdo->lastInsertId();
    }

    public function buscar($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM Produto WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar(Produto $produto) {
        $stmt = $this->pdo->prepare('UPDATE Produto SET nome = ?, preco = ?, quantidadeEmEstoque = ? WHERE id = ?');
        $stmt->execute([$produto->getNome(), $produto->getPreco(), $produto->getQuantidade()]);
    }

    public function apagar($id) {
        $stmt = $this->pdo->prepare('DELETE FROM Produto WHERE id = ?');
        $stmt->execute([$id]);
    }
}




?>
