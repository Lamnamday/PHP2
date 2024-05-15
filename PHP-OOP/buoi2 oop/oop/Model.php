<?php

class Model
{

    public $conn;
    public string $tableName;
    public function __construct(
        public string $host,
        public string $dbname,
        public string $username = 'root',
        public string $password = '',
        public string $port = '3306'
    ) {

        $conn = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->dbname", $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    function productAll()
    {
        $sql = "SELECT * FROM $this->tableName ORDER BY id DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}

$post = new Model('localhost', 'phpoop');
$post->tableName = 'products';
echo "<pre>";
print_r($post);
