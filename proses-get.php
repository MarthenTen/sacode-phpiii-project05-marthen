<?php

// echo $post['email'];
// echo $post['nama'];

 if(isset($_GET['email'])){
    // membuat variabel
    $alamat_email = $_GET['email'];
    $nama = $_GET['nama'];

    // menampilkan email
    echo $alamat_email;
    echo $nama;
    
 };

?>