<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="#" class="navbar-brand">SAMBIREJO.WISATA</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a href="<?= base_url('/about') ?>">About</a></li>
                <li class="active"><a href="<?= base_url('/blog') ?>">Blog</a></li>
                <li><a href="<?= base_url('/contact') ?>">Contact Us</a></li>
            </ul>
        </div>

    </div>
</section>


<section>
    <div class="container">
        <div class="text-center">
            <h1>Blog Desa Budaya Sambirejo</h1>
        </div>
    </div>
</section>

<section class="section-background">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 pull-right col-xs-12">
                <div class="form">
                    <!-- <form action="/pages/cari_aksi" method="POST" name="keyword" autocomplete="off">
                        <div class="form-group">
                            <label class="control-label">Blog Search</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for blog..." name="keyword">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" name="submit">Go!</button>
                                </span>
                            </div>
                        </div>
                    </form> -->
                </div>

                <br>

                <label class="control-label">Berita Terpopuler</label>

                <ul class="list">
                    <li><a href="https://kumparan.com/kkntupn08sambirejo/karawitan-penyongsong-wisata-desa-sambirejo-wonosalam-kabupaten-jombang-1z218Ujdhu1">Karawitan Penyongsong Wisata Desa Sambirejo, Wonosalam, Kabupaten Jombang</a></li>
                    <li><a href="https://kumparan.com/kkntupn08sambirejo/menjaga-budaya-kuda-lumping-melalui-hobi-masa-kecil-1z2KEjimGGP">Menjaga Budaya Kuda Lumping melalui Hobi Masa Kecil</a></li>
                    <li><a href="https://kumparan.com/kkntupn08sambirejo/puluhan-ribu-pelajar-jombang-pecahkan-rekor-muri-tari-remo-boletan-1z2JlkR1Bvg">Puluhan Ribu Pelajar Jombang Pecahkan Rekor MURI Tari Remo Boletan</a></li>
                </ul>
            </div>
            <div class="col-lg-9 col-xs-12">
                <div class="row">
                    <?php
                    foreach ($blog as $row) {
                        echo '
                        <div class="col-sm-6">
                        <div class="courses-thumb courses-thumb-secondary">
                            <div class="courses-top">
                                <div class="courses-image">
                                    <img src="images/' . $row['foto'] . '" class="img-responsive" alt="">
                                </div>
                            </div>

                            <div class="courses-detail">
                                <h3><a href="' . $row['link'] . '">' . $row['nama'] . '</a></h3>
                            </div>

                            <div class="courses-info">
                                <a href="' . $row['link'] . '" class="section-btn btn btn-primary btn-block">Read More</a>
                            </div>
                        </div>
                    </div>
                    ';
                    }

                    ?>
                </div>
            </div>


        </div>
    </div>
</section>