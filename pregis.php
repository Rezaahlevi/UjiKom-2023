<?php 
    include 'conn/koneksi.php';
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $telp = $_POST['telp'];
    $query = "INSERT INTO masyarakat(nik, nama, username, password, telp) VALUES ('".$nik."', '".$nama."', '".$username."', '".$password."', '".$telp."')";

    mysqli_query($koneksi, $query);
    echo '<script>
        alert("data berhasil ditambahkan");
        window.location = "index.php";
    </script>';
    mysqli_close($koneksi);
?>