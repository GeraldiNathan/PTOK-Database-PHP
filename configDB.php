<?php

class configDB
{
    protected $mysqli;

    public function connect()
    {
        $this->mysqli = new mysqli("localhost", "root", "", "mahasiswa");

        if ($this->mysqli->connect_errno) {
            echo "Gagal menghubungkan ke database" . $this->mysqli->connect_errno;
            exit();
        };
    }
}
