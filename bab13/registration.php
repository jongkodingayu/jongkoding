<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Petugas</title>
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
                        <a class="nav-link" aria-current="page" href="index.php">Daftar Siswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="form" class="pt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col colom col-8 p-4 bg-light">
                    <form action="action_register.php" method="POST">

                        <div class="form-group mb-2">
                            <label for="email">Alamat Email</label>
                            <input id="email" class="form-control" type="email" placeholder="Alamat Email" required name="email" />
                        </div>

                        <div class="form-group mb-2">
                            <label for="name">Nama Lengkap</label>
                            <input id="name" class="form-control" type="text" placeholder="Nama Lengkap" required name="name" />
                        </div>

                        <div class="form-group mb-2">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="password" placeholder="Password" required name="password" />
                        </div>

                        <div class="form-group mb-2">
                            <label for="re-password">Konfirmasi Password</label>
                            <input id="re-password" class="form-control" type="password" placeholder="Ulangi Password" required name="re-password" />
                        </div>

                        <input type="submit" value="Kirim" class="btn btn-primary mt-4" name="submit" />

                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>