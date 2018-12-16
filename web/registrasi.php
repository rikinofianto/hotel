<?php
if (isset($_POST['registrasi'])) {
    $registrasi = $user->createUserTamu($_POST);
    $error = '';
    if ($registrasi->status == 200) {
        echo "<script>window.location.href='index.php';</script>";
    } else {
        $error = $registrasi->data;
    }
}
?>
<section class="contact-w3ls" id="registrasi" style="background: #fff;">
    <div class="container">

        <div class="col-lg-12 col-md-12 col-sm-12 contact-w3-agile2" data-aos="flip-left">
            <div class="contact-agileits">
                <h4>Registrasi</h4>
                <form method="post" name="reservation" id="reservation">
                    <div class="control-group form-group">
                        <label class="contact-p1">Username :</label>
                        <input type="text" class="form-control" name="username" id="username" required>
                        <?php if (!empty($error->username)) :?>
                            <p class="help-block"><?=$error->username;?></p>
                        <?php endif;?>
                    </div>
                    <div class="control-group form-group">
                        <label class="contact-p1">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                        <?php if (!empty($error->password)) :?>
                            <p class="help-block"><?=$error->password;?></p>
                        <?php endif;?>
                    </div>
                    <div class="control-group form-group">
                        <label class="contact-p1">Ulangi Password:</label>
                        <input type="password" class="form-control" name="repassword" id="repassword" required>
                        <?php if (!empty($error->password)) :?>
                            <p class="help-block"><?=$error->password;?></p>
                        <?php endif;?>
                    </div>
                    <div class="control-group form-group">
                        <label class="contact-p1">Email:</label>
                        <input type="text" class="form-control" name="email" required>
                        <?php if (!empty($error->email)) :?>
                            <p class="help-block"><?=$error->email;?></p>
                        <?php endif;?>
                    </div>
                    <div class="control-group form-group">
                        <label class="contact-p1">Nama Lengkap:</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                        <?php if (!empty($error->nama)) :?>
                            <p class="help-block"><?=$error->nama;?></p>
                        <?php endif;?>
                    </div>
                    <div class="control-group form-group">
                        <label class="contact-p1">Alamat Lengkap:</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" required>
                        <?php if (!empty($error->alamat)) :?>
                            <p class="help-block"><?=$error->alamat;?></p>
                        <?php endif;?>
                    </div>
                    <div class="control-group form-group">
                        <label class="contact-p1">Nomomr HP/Telpon:</label>
                        <input type="text" class="form-control" name="nohp" id="nohp" required>
                        <?php if (!empty($error->nohp)) :?>
                            <p class="help-block"><?=$error->nohp;?></p>
                        <?php endif;?>
                    </div>
                    <input type="submit" name="registrasi" value="Registrasi" class="btn btn-primary">
                </form>
            </div>
        </div>

    </div>
</section>