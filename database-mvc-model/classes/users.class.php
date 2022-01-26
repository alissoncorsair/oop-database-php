<?php
class Users extends Dbh
{

    protected function getUser($firstName) {
        $sql = "SELECT * FROM users WHERE users_firstname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName]);
        $result = $stmt->fetchAll();
        return $result;
    }

    protected function getUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    protected function setUser($firstName, $lastName, $dateofbirth) {
        $sql = "INSERT INTO users('users_firstname', 'users_lastname', 'users_dateofbirth') VALUES(?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstName, $lastName, $dateofbirth]);

    }

}