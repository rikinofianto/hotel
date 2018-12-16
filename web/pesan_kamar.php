<?php

$nomor_invoice='INV-'.date('Ymd').'-'.(rand(10,100));
if (isset($_POST['checkin'])) {
    echo "<script>alert('berhasil!');window.location.href='index.php';</script>";
}
?>
<section class="contact-w3ls" id="reservation" style="background: #fff;">
    <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
            <div class="contact-agileits">
                <div class="col-lg-12 col-md-12 col-sm-12 contact-w3-agile1" data-aos="flip-right">
                    <h4><?php echo $kamar_view['nama_kamar_tipe']; ?></h4>
                    <p class="contact-agile1">
                        Harga / Malam : <b>Rp <?php echo number_format($kamar_view['harga_malam']); ?></b>
                    </p>
                    <p class="contact-agile1">
                        Maximal Orang Dewasa : <b><?php echo $kamar_view['max_dewasa']; ?> Orang</b>
                    </p>
                    <p class="contact-agile1">
                        Maximal Anak-anak : <b><?php echo $kamar_view['max_anak']; ?> Orang</b>
                    </p>
                    <p class="contact-agile2">
                        <a href="?act=reservation&tamu=baru&kamar=<?php echo $kamar_view['id_kamar']; ?>"><b>Klik disini</b></a> jika nama tamu yang dimaksud tidak ditemukan untuk ditambah pada daftar buku tamu.
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
            <div class="contact-agileits">
                <h4>Pesan Kamar</h4>
                <form method="post">
                    <div class="control-group form-group">
                        <label class="contact-p1">#INVOICE :</label>
                        <input type="text" name="nomor_invoice" class="form-control" value="<?=$nomor_invoice;?>">
                        <p class="help-block"></p>
                    </div>
                    <div class="control-group form-group">
                        <label class="contact-p1">Nama Kamar:</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $kamar_view['nama_kamar_tipe']; ?>">
                        <input type="hidden" name="id_kamar" value="<?php echo $kamar_view['id_kamar']; ?>" />
                        <p class="help-block"></p>
                    </div>
                    <div class="control-group form-group">
                        <label class="contact-p1">Check In:</label>
                        <input type="text" class="form-control" name="tanggal_checkin" id="check_in" required>
                        <p class="help-block"></p>
                    </div>
                    <div class="control-group form-group">
                        <label class="contact-p1">Check Out:</label>
                        <input type="text" class="form-control" name="tanggal_checkout" id="check_out" required>
                        <p class="help-block"></p>
                    </div>
                    <div class="control-group form-group">
                        <label class="contact-p1">Nama Tamu :</label>
                        <select class="form-control nama_tamu" name="id_tamu">
                            <option selected="selected">--Pilih--</option>
                            <?php foreach($tamu as $tamu) { ?>
                                <option value="<?php echo $tamu['id_tamu']; ?>">
                                    <?php echo $tamu['prefix'].'. '.$tamu['nama_depan'].'&nbsp;'.$tamu['nama_belakang']; ?>
                                </option>
                            <?php } ?>
                        </select>
                        <p class="help-block"></p>
                    </div>
                    <input class="form-control" name="jumlah_dewasa" type="hidden" value="1" />
                    <input class="form-control" name="jumlah_anak" type="hidden" value="0" />
                    <input class="form-control" name="waktu_checkin" type="hidden" value="12:00" />
                    <input class="form-control" name="waktu_checkout" type="hidden" value="12:00" />
                    <input class="form-control" name="deposit" type="hidden" value="0" />
                    <input type="submit" name="checkin" value="Booking" class="btn btn-primary">
                </form>
            </div>
        </div>

    </div>
</section>