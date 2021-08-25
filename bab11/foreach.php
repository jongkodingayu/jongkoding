<?php

//array artikel
$artikel = array(
    (object) array(
        'judul' => 'Card title 1',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do elusmde
        tempor incididumt ut labore et dolore magna aliqua.'
    ),
    (object) array(
        'judul' => 'Card title 2',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do elusmde
        tempor incididumt ut labore et dolore magna aliqua.'
    ),
    (object) array(
        'judul' => 'Card title 3',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do elusmde
        tempor incididumt ut labore et dolore magna aliqua.'
    ),
    (object) array(
        'judul' => 'Card title 4',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do elusmde
        tempor incididumt ut labore et dolore magna aliqua.'
    )
);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="styles.css" rel="stylesheet" />
    <title>Bootstrap</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <!-- Navbar Brand -->
            <a class="navbar-brand" href="#">
                <img src="jong_koding_logo.png" />
            </a>

            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Login</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdwon-item" href="#">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel Indicator -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Carousel Inner -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="carousel-1.jpg" alt="gambar 1" class="d-block w-100" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Carousel Slide Pertama</h5>
                    <p>Lorem ipsum sit amet, consectetur adipiscing elit</p>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="carousel-2.jpg" class="d-block w-100" alt="gambar 2" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Carousel Slide Kedua</h5>
                    <p>Lorem ipsum sit amet, consectetur adipiscing elit</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="carousel-3.jpg" alt="gambar 3" class="d-block w-100" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Carousel Slide Ketiga</h5>
                    <p>Lorem ipsum sit amet, consectetur adipiscing elit</p>
                </div>
            </div>
        </div>

        <!-- Carousel Navigation -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Grid -->
    <div class="py-5" id="features">
        <div class="container">
            <div class="row">
                <div class="col col-4">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-alarm"></i>
                            </div>
                            <h5 class="card-title">Ketelitian dan Kedisiplinan</h5>
                            <p class="card-text">Belajar ngoding harus teliti dan disiplin.</p>
                        </div>
                    </div>
                </div>

                <div class="col col-4">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-alarm"></i>
                            </div>
                            <h5 class="card-title">Ketelitian dan Kedisiplinan</h5>
                            <p class="card-text">Belajar ngoding harus teliti dan disiplin.</p>
                        </div>
                    </div>
                </div>

                <div class="col col-4">
                    <div class="card text-center py-3">
                        <div class="card-body">
                            <div class="icon mb-4">
                                <i class="bi bi-alarm"></i>
                            </div>
                            <h5 class="card-title">Ketelitian dan Kedisiplinan</h5>
                            <p class="card-text">Belajar ngoding harus teliti dan disiplin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="blog" class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($artikel as $data) { ?>
                    <div class="col col-6">
                        <div class="card mb-3">
                            <img src="carousel-1.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?= $data->judul ?></h5>
                                <p class="card-text"><?= $data->text ?></p>
                                <p class="card-tex"><small class="text-muted">Last updated 3 mins ago.</small></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>