<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="form" class="pt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col colom col-8 p-4 bg-light">
                    <h2 class="mb-4">Login Petugas</h2>
                    <form action="action_login.php" method="POST">

                        <div class="form-group mb-2">
                            <label for="email">Alamat Email</label>
                            <input id="email" class="form-control" type="email" placeholder="Alamat Email" required name="email" />
                        </div>

                        <div class="form-group mb-2">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="password" placeholder="Password" required name="password" />
                        </div>

                        <input type="submit" value="Kirim" class="btn btn-primary" name="submit" />

                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>