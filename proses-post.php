<?php

// echo $post['email'];
// echo $post['nama'];

 if(isset($post['email'])){
    // membuat variabel
    $alamat_email = $_POST['email'];
    $nama = $_POST['nama'];

    // menampilkan email
    echo $alamat_email;
    echo $nama;
    
 };

?>