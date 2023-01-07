<?php 
/*
$server = 'mysql-gerardss.alwaysdata.net';
$username ='gerardss';
$password ='973540040Gs';
$database = 'gerardss_php_login_database';


try{
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e) {

  die('Connected failed: ' .$e->getMessage());

}
*/

class Db
{
    private $host = 'mysql-gerardss.alwaysdata.net';
    private $user = 'gerardss';
    private $password = '973540040Gs';
    private $dbname = 'gerardss_php_login_database';
    private $conn;

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Conexión fallida: ' . $e->getMessage();
        }

        return $this->conn;
    }
}
?>