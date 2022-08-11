<?php 


if (isset($_POST['email']))
{
    $alamat_email = $_POST['email'];

    if ($_POST['kata-sandi']=='123')
    {
           echo "welcome" . $alamat_email;
    }else{
        echo "Password Salah";
    }
}

?>