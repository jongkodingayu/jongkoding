<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
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
                        <a class="nav-link" aria-current="page" href="#">Daftar Siswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="form" class="pt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col colom col-8 p-4 bg-light">
                    <form action="action.php" method="POST">

                        <div class="form-group mb-2">
                            <label for="nis">NIS</label>
                            <input id="nis" class="form-control" type="text" placeholder="Nomor Induk Siswa" required name="nis" />
                        </div>

                        <div class="form-group mb-2">
                            <label for="name">Nama Lengkap</label>
                            <input id="name" class="form-control" type="text" placeholder=Nama Lengkap" required name="name" />
                        </div>

                        <div class="form-group mb-2">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="L" required />
                                <label class="form-check-label" for="male">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="P" required />
                                <label class="form-check-label" for="female">Perempuan</label>
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="address">Alamat</label>
                            <textarea class="form-control" id="address" rows="3" required name="address"></textarea>
                        </div>

                        <div class="form-group mb-2">
                            <label for="placeOfBirth">Tempat Lahir</label>
                            <input id="placeOfBirth" class="form-control" type="text" placeholder="Tempat Lahir" required name="placeOfBirth" />
                        </div>

                        <div class="form-group mb-2">
                            <label for="dateOfBirth">Tanggal Lahir</label>
                            <input id="dateOfBirth" class="form-control" type="date" placeholder="Tanggal Lahir" required name="dateOfBirth" />
                        </div>

                        <div class="form-group mb-2">
                            <label for="phone">Telepon</label>
                            <input id="phone" class="form-control" type="text" placeholder="Nomor Telepon/ Handphone" required name="phone" />
                        </div>

                        <input type="submit" value="Kirim" class="btn btn-primary" name="submit" />

                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>