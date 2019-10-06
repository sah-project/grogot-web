<!-- WELCOME -->
<section class="nopadding-bottom">
    <div class="container">
        <header class="text-center margin-bottom-40">
            <h1 class="weight-300" style="color:#9de887;"><?= $berita['judul']; ?></h1>
        </header>
        <div class="text-justify">
            <img src="<?php echo base_url('upload/berita/') . $berita['image']; ?>" width="400" height="200" alt="">
            <?php echo $berita['konten']; ?>
        </div>
    </div>
</section>
<!-- /WELCOME -->

<!-- / -->



<div class="text-center margin-top-30 margin-bottom-30">
</div>