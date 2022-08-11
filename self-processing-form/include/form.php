<!-- form start -->
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <!-- judul -->
    <h1 class="text-center mb-3 fw-bolder">Login</h1>
    <p class="text-center mb-5 text-muted ">isi almat email dan kata Sandi</p>
    <!--akhir judul  -->

    <!-- alamat email -->
    <div class="form-group mb-3">
        <label for="alamat-email" class="form-label text-muted">Alamat Email</label>
        <input type="email" id="alamat-email" name="email" placeholder="Alamat Email"
            class="form-control form-control-lg">
    </div>
    <!--akhir alamat email -->

    <!-- sandi -->
    <div class="form-group mb-3">
        <label for="kata-sandi" class="form-label text-muted">Kata Sandi</label>
        <input type="password" id="kata-sandi" name="kata-sandi" placeholder="Kata Sandi"
            class="form-control form-control-lg">
    </div>
    <!--sandi-->

    <!-- Tombol Submit -->

    <button type="submit" class="btn btn-lg btn-primary">Login</button>
    <!-- akhir Tombol Submit -->


</form>
<!-- form end -->