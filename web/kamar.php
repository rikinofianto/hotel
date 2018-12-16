
<div class="plans-section" id="rooms">
    <div class="container">
        <h3 class="title-w3-agileits title-black-wthree">Harga Kamar</h3>
        <div class="priceing-table-main">
            <?php if(!empty($kamar)) : ?>
                <?php $i = 1;?>
                <?php foreach($kamar as $kamar_tersedia) : ?>
                    <div class="col-md-3 price-grid">
                        <div class="price-block agile">
                            <div class="price-gd-top">
                                <img src="<?=WEB_DIR;?>images/r<?=$i;?>.jpg" alt=" " class="img-responsive"/>
                                <h4><?php echo $kamar_tersedia['nama_kamar_tipe']; ?></h4>
                            </div>
                            <div class="price-gd-bottom">
                                <div class="price-list">
                                    <ul>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-selet">
                                    <h3><span>IDR</span><?php echo number_format($kamar_tersedia['harga_malam'], 0, ",", "."); ?></h3>
                                    <a href="index.php?act=reservation&kamar=<?=$kamar_tersedia['id_kamar'];?>">Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if ($i > 4) {
                        break;
                    }
                    $i++;
                    ?>

                <?php endforeach;?>
            <?php else :?>
                <div>
                    <p class="contact-agile2">Kamar Penuh</p>
                </div>
            <?php endif;?>
        <div class="clearfix"></div>
        </div>
    </div>
</div>