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
                <li class="active"><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a href="<?= base_url('/about') ?>">About</a></li>
                <li><a href="<?= base_url('/blog') ?>">Blog</a></li>
                <li><a href="<?= base_url('/contact') ?>">Contact Us</a></li>
            </ul>
        </div>

    </div>
</section>
<!-- content -->
<section id="home">
    <div class="row">
        <div class="owl-carousel owl-theme home-slider">
            <div class="item item-first">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>Selamat Datang Di Wisata Sambirejo</h1>
                            <h3>Desa wisata yang terkenal karena Budaya-nya dengan melestarikan musik trasdisional karawitan sebagai ikon desa yang meberada di Kecamatan Wonosalam.</h3>
                            <a href="<?= base_url('/about') ?>" class="section-btn btn btn-default">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-second">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>Anak-anak Desa Sambirejo dan Jaranan</h1>
                            <h3>Desa Sambirejo masih berupaya untuk menjaga warisan budaya leluhur. Salah satu upaya yang terlihat adalah banyaknya anak-anak di Desa Sambirejo yang lihai memainkan kesenian kuda lumping.</h3>
                            <a href="https://kumparan.com/kkntupn08sambirejo/menjaga-budaya-kuda-lumping-melalui-hobi-masa-kecil-1z2KEjimGGP/1" class="section-btn btn btn-default">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-third">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>Karawitan Penyongsong Wisata Desa Sambirejo</h1>
                            <h3>Salah satu wisata yang cukup menarik adalah wisata budaya musik tradisional. Salah satu contohnya adalah wisata karawitan yang ada di Desa Sambirejo. Kelompok karawitan yang ada di Desa Sambirejo telah terbentuk dan berkembang sejak tahun 2016.</h3>
                            <a href="https://kumparan.com/kkntupn08sambirejo/karawitan-penyongsong-wisata-desa-sambirejo-wonosalam-kabupaten-jombang-1z218Ujdhu1/4" class="section-btn btn btn-default">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="text-center">
                        <h2>Desa Sambirejo?</h2>

                        <br>

                        <p class="lead">Desa Sambirejo adalah sebuah desa di Kecamatan Wonosalam, Kabupaten Jombang, Provinsi Jawa Timur, Indonesia.
                            Desa ini terletak di kaki dan lereng Gunung Anjasmoro dengan ketinggian rata-rata 600 – 700 meter di atas permukaan laut.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog -->

    <section id="testimonial">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                        <h2>Blog News <small>Ayo Baca Berita Baru Seputar Desa Sambirejo!</small></h2>
                    </div>

                    <div class="owl-carousel owl-theme owl-client">
                        <?php
                        foreach ($blog as $row) {
                            echo '
                            <div class="col-md-4 col-sm-4">
                                <div class="item">
                                    <div class="courses-top">
                                        <div class="courses-image">
                                            <img src="images/' . $row['foto'] . '" class="img-responsive" alt="">
                                        </div>
                                    </div>

                                    <div class="courses-detail">
                                        <h3><a href=" ' . $row['link'] . '">' . $row['nama'] . '</a></h3>
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
</main>