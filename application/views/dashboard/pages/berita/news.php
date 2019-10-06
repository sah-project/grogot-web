			<!-- WELCOME -->
			<section class="nopadding-bottom">
			    <div class="container">
			        <header class="text-center margin-bottom-40">
			            <h1 class="weight-300" style="color:#9de887;">BERITA & AGENDA DESA</h1>
			        </header>
			        <div class="text-justify">
			            <?php
                        function limit_words($string, $word_limit)
                        {
                            $words = explode(" ", $string);
                            return implode(" ", array_splice($words, 0, $word_limit));
                        }
                        foreach ($berita->result_array() as $i) :
                            $id = $i['id'];
                            $judul = $i['judul'];
                            $image = $i['image'];
                            $konten = $i['konten'];
                            ?>
			                <div class="col-md-8 col-md-offset-2">
			                    <h2><?php echo $judul; ?></h2>
			                    <hr />
			                    <img src="<?php echo base_url('upload/berita/') . $image ?>" width="400" height="200" alt="">
			                    <?php echo limit_words($konten, 30); ?><a href="<?php echo base_url() . 'berita_agenda/details/' . $id; ?>"> Selengkapnya ></a>
			                </div>
			            <?php endforeach; ?>
			        </div>
			    </div>
			</section>
			<!-- /WELCOME -->

			<!-- / -->



			<div class="text-center margin-top-30 margin-bottom-30">
			</div>