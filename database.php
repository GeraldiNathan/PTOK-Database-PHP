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

                    $fetchData = mysqli_query($this->mysqli, "SELECT * from datamahasiswa");

                    if ($fetchData) {
                        echo "<table border ='1'>";
                        echo "<tr >
                            <td>nama</td>
                            <td>email</td>
                            <td>alamat</td>
                            <td>No HP</td>
                        </tr>
                        ";
                        $no = 1;
                        while ($fetching = mysqli_fetch_array($fetchData)) {
                            echo "<tr>
                                <td>" . $fetching["name"] . "</td>
                                <td>" . $fetching["email"] . "</td>
                                <td>" . $fetching["alamat"] . "</td>
                                <td>"  . $fetching["whatsapp"] . "</td>
                                </tr>
                                
                                ";
                            $no++;
                        }
                        echo "</table>";
                    }
                }
            } else {
                echo "<div class='notifFailed'>Data gagal ditambahkan</div>";
            }
        }
    }
}
$database = new DB();
$database->Mahasiswa();
