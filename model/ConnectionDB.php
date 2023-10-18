<?php
class DatabaseConnection {
    private $host = 'seu_host_mysql';
    private $dbname = 'seu_banco_de_dados';
    private $username = 'seu_usuario_mysql';
    private $password = 'sua_senha_mysql';
    private $port = 'sua_porta_mysql';
    private $charset = 'utf8'; // Opcional: Especifique a codificação desejada

    public function connect() {
        try {
            $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->dbname};charset={$this->charset}";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ];

            $pdo = new PDO($dsn, $this->username, $this->password, $options);
            return $pdo;
        } catch (PDOException $e) {
            die('Erro de conexão: ' . $e->getMessage());
        }
    }
}
?>
