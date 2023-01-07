<?php
include_once "database.php";
class User
{
    private $id;
    private $name;
    private $cognoms;
    private $user;
    private $email;
    private $password;

    public function getAll()
    {
        $conn = (new Db())->connect();
        $stmt = $conn->query('SELECT * FROM php_login_database');
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function getById($id)
    {
        $conn = (new Db())->connect();
        $stmt = $conn->prepare('SELECT * FROM php_login_database WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $user1 = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user1;
    }

    public function create($name, $cognoms, $user, $email, $password)
    {
        $conn = (new Db())->connect();
        $stmt = $conn->prepare('INSERT INTO php_login_database (name, cognoms, user, email, password) VALUES (:name, :cognoms, :user, :email, :password)');
        $stmt->execute(['name' => $name, 'cognoms' => $cognoms, 'user' => $user, 'email' => $email, 'password' => $password]);
    }

    public function update($id, $name, $cognoms, $user, $email, $password)
    {
        $conn = (new Db())->connect();
        $stmt = $conn->prepare('UPDATE php_login_database SET name = :name, cognoms = :cognoms, user = :user, email = :email, password = :password WHERE id = :id');
        $stmt->execute(['id' => $id, 'name' => $name, 'cognoms' => $cognoms, 'user' => $user, 'email' => $email, 'password' => $password]);
        return $stmt->rowCount();
    }

    public function delete($id)
    {
        $conn = (new Db())->connect();
        $stmt = $conn->prepare('DELETE FROM php_login_database WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->rowCount();
    }
    public function getByEmail($email)
    {
    $conn = (new Db())->connect();
    $stmt = $conn->prepare('SELECT * FROM php_login_database WHERE email = :email');
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
    }
}
?>