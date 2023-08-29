<?php 

$data = file_get_contents("../wpu-hut/data/pizza.json");
$menu = json_decode($data, true);

$menu = $menu["menu"];
var_dump($menu[0]["nama"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>WPU Hut</title>
</head>

<body>

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../wpu-hut/img/logo.png" alt="logo" width=200>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">All Menu</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- main start -->
    <div class="container">

        <div class="row my-3">
            <div class="col">
                <h1>All Menu</h1>
            </div>
        </div>

        <div class="row">
            <?php foreach ($menu as $row) : ?>
                <div class="col-md-4">
                    <div class="card mb-3" style="width: 18rem;">
                        <img src="img/menu/<?= $row["gambar"]?>" class="card-img-top" alt="<?= $row["nama"]?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["nama"]?></h5>
                            <h6 class="card-title">Rp. <?= $row["harga"]?></h6>
                            <p class="card-text"><?= $row["deskripsi"]?></p>
                            <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
    <!-- main end -->

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
</body>

</html>