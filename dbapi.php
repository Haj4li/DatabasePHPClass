<?php

// Database API version 0.2
// Coded By Ali Nakhaee

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
    public function Mysqli_real_escape($string)
    {
        return mysqli_real_escape_string($this->db,$string);
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
