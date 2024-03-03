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

            if (!empty($name) && !empty($email) && !empty($alamat) && !empty($whatsapp)) {
                $datas = mysqli_query($this->mysqli, "INSERT into datamahasiswa values('', '$name', '$email', '$alamat', '$whatsapp')");

                if ($datas) {
                    echo "<div class='notifSuccess'>Data berhasil ditambahkan!</div>";
                    // Fetching all data
                }
            } else {
                echo "<div class='notifFailed'>Data gagal ditambahkan</div>";
            }
        }
    }
}
$database = new DB();
$database->Mahasiswa();
