<?php
require_once('configDB.php');

class DB extends configDB
{
    public function Mahasiswa()
    {
        $this->connect();

        if (isset($_POST['submit'])) {

            $name = $_POST['nama'];
            $email = $_POST['email'];
            $whatsapp = $_POST['whatsapp'];
            $alamat = $_POST['alamat'];

            $datas = mysqli_query($this->mysqli, "INSERT into datamahasiswa values('', '$name', '$email', '$alamat', '$whatsapp')");

            if ($datas) {
                echo "Data berhasil ditambahkan";
            } else {
                echo "Data gagal ditambahkan!";
            }
        }
    }
}
$database = new DB();
$database->Mahasiswa();
