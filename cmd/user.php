<?php
    include("Database/koneksi.php");

    function createuser($nama, $email, $user, $password){

        $stt = false;
        $iduser = md5($user);
        $sql ="INSERT INTO tbuser(nama, email, Username, Passkey, iduser) 
        VALUES(
        '$nama',
        '$email',
        '$user',
        '$password', 
        '$iduser'
        );";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT)or die("Koneksi ke DBMS Mysql Gagal");
        $stt = mysqli_query($cnn, $sql);
        return $stt;
    }
