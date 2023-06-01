<?php

// Database API version 0.1
// Coded By Ali Nakhaee
// https://github.com/Haj4li

class DataBase
{
    private $db;

    public function Connect($db_name, $db_address, $db_username, $db_password)
    {
        $this->db = mysqli_connect($db_address, $db_username, $db_password, $db_name);
        if (!$this->db) {
            die("Database Connection Error : " . mysqli_connect_errno($this->db));
        }
        return mysqli_connect_errno($this->db);
    }
    public function Execute($query)
    {
        $result = mysqli_query($this->db, $query);
        return array($result, mysqli_connect_errno($this->db));
    }
    public function Close()
    {
        mysqli_close($this->db);
    }
}

?>
