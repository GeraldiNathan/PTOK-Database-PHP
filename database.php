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
                    echo "<div
                    style='
                      color: green;
                      border: 1px solid green;
                      border-color: green;
                      padding: 8px;
                      width: fit-content;
                      margin-bottom: 25px;
                      margin-top: 25px;
                    '
                  >
                    Data berhasil ditambahkan ✅
                  </div>";


                    $fetchData = mysqli_query($this->mysqli, "SELECT * from datamahasiswa");

                    if ($fetchData) {
                        echo "<table ";
                        echo "<tr border ='1'>
                            <td 
                            style='padding-top: 12px;
                            padding-bottom: 12px;
                            text-align: left;
                            background-color: #04AA6D;
                            color: white;'>
                            ID
                            </td>
                            
                            <td 
                            style='padding-top: 12px;
                            padding-bottom: 12px;
                            text-align: left;
                            background-color: #04AA6D;
                            color: white;'>
                            Nama
                            </td>

                            <td 
                            style='padding-top: 12px;
                            padding-bottom: 12px;
                            text-align: left;
                            background-color: #04AA6D;
                            color: white;'>
                            Email
                            </td>
                            
                            <td 
                            style='padding-top: 12px;
                            padding-bottom: 12px;
                            text-align: left;
                            background-color: #04AA6D;
                            color: white;'>
                            Alamat
                            </td>
                            
                            <td 
                            style='padding-top: 12px;
                            padding-bottom: 12px;
                            text-align: left;
                            background-color: #04AA6D;
                            color: white;'>
                            No HP
                            </td>
                        </tr>
                        ";
                        $no = 1;
                        while ($fetching = mysqli_fetch_array($fetchData)) {
                            echo "<tr>
                                <td>" . $fetching["id"] . "</td>
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
                echo "<div
                style='
                  color: crimson;
                  border: 1px solid crimson;
                  border-color: crimson;
                  padding: 8px;
                  width: fit-content;
                  margin-bottom: 25px;
                  margin-top: 25px;
                '
              >
                Data gagal ditambahkan ❗
              </div>";
            }
        }
    }
}
$database = new DB();
$database->Mahasiswa();
