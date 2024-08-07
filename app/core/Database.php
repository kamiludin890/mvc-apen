<?php
//Database
class Database
{
    private $host = DB_HOST, $user = DB_USER, $pass = DB_PASS, $db_name = DB_NAME;

    private $dbh, $stmt;
    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';db_name=' . $this->db_name;
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            die($e->getMessage("SQL Connection Error"));
        }
    }
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_int($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_int($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    public function execute()
    {
        $this->stmt->execute();
    }
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchALL(PDO::FETCH_ASSOC);
    }
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}
