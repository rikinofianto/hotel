<script type="text/javascript">
    var id_kamar = "<?php echo $kamar_view['id_kamar'];?>";
</script>
<?php
if (isset($_POST['tamu-add'])) {
    echo "<script>
    setTimeout(function(){
        window.location.href = 'index.php?act=reservation&kamar='+id_kamar;
    }, 2000);
    </script>";
}
?>
<section class="contact-w3ls" id="reservation" style="background: #fff;">
    <div class="container">

        <div class="col-lg-12 col-md-12 col-sm-12 contact-w3-agile2" data-aos="flip-left" style="background: #747474;">
            <div >
                <h4>Tamu Baru</h4>
                <form action="" method="post">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Title</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <select class="form-control" name="prefix">
                                        <option value="Mr">Mr</option>
                                        <option value="Ms">Ms</option>
                                        <option value="Mrs">Mrs</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Depan</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input class="form-control" name="nama_depan" placeholder="Nama Depan" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Belakang</label>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input class="form-control" name="nama_belakang" placeholder="Nama Belakang" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Identitas</label>
                            <div class="row">
                                <div class="col-sm-3">
                                    <select class="form-control" name="tipe_identitas" />
                                        <option value="KTP">KTP</option>
                                        <option value="KTP">SIM</option>
                                        <option value="KTP">PASSPORT</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-control" name="nomor_identitas" placeholder="Nomor Identitas" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Warga Negara</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <input class="form-control" name="warga_negara" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="alamat_jalan"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Kabupaten / Kota</label>
                                    <input class="form-control" name="alamat_kabupaten" placeholder="Kabupaten / Kota" />
                                </div>
                                <div class="col-sm-6">
                                    <label>Provinsi</label>
                                    <input class="form-control" name="alamat_provinsi" placeholder="Provinsi" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Nomor Telp / Handphone</label>
                                    <input class="form-control" name="nomor_telp" required />
                                </div>
                                <div class="col-sm-6">
                                    <label>Email</label>
                                    <input class="form-control" name="email" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group" style="float: right;">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" name="tamu-add" value="Tambah Tamu" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
</section>