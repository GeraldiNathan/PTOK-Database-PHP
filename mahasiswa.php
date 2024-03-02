<?php

$mysqli = new mysqli("localhost", "root", "", "mahasiswa");

if ($mysqli->connect_errno) {
    echo "Gagal menghubungkan ke database" . $mysqli->connect_errno;
    exit();
}
