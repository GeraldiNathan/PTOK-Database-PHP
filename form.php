<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendataan Mahasiswa</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        /* margin-top: 12%; */
    }

    .container {
        width: 20%;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"] {
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    button {
        padding: 10px 15px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }

    button:focus {
        outline: none;
    }
</style>

<body>
    <div class="container">
        <h1>Pendataan Mahasiswa</h1>
        <form action="" method="post">
            <input type="text" placeholder="nama" name="nama" />
            <br />
            <input type="email" placeholder="email" name="email" />
            <br />
            <input type="text" placeholder="alamat" name="alamat" />
            <br />
            <input type="text" placeholder="whatsapp" name="whatsapp" />
            <br />
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>

<?php

require_once("database.php");
