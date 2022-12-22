<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="card card text-bg-dark text-center">
        <div class="card-body">
            <h5 class="card-title ">SAMBIREJO WISATA BLOG</h5><br>
            <a href="<?= base_url('/blog') ?>" class="btn btn-success">Blog Wisata Sambirejo</a> <br><br>
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Blog Sambirejo</h5>
                            <div class="row">

                                <?php foreach ($blogadmin as $row) {
                                    echo '
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                <form action="' . base_url('pages/hapus/' . $row['id']) . '">
                                                    <p class="card-text"><a class="text-success" href="' . $row['link'] . '">' . $row['nama'] . '</a> </p>
                                                </form> 
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
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Tambah Blog</h5>
                            <form class="form-signin" action="<?php echo base_url('pages/tambah_aksi'); ?>" method="post">
                                <div class="mb-3">
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Judul Blog">
                                </div>
                                <div class="mb-3">
                                    <input type="file" name="foto" class="form-control" id="foto" placeholder="Foto Blog">
                                </div>
                                <div class="mb-3">
                                    <textarea name="link" class="form-control" id="link" rows="3" placeholder="Link Blog"></textarea>
                                </div>
                                <button class="btn btn-success" type="submit" name="submit">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>