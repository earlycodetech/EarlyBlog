<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Early Blog</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css">
</head>

<body>
    <!-- NAVBAR -->
    <section>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" alt="logo" width="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Recent Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register">Register</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </section>

    <!-- Register Form -->
    <section>
        <div class="container mt-5">
            <form action="" class="card mx-auto shadow" style="max-width: 600px;">
            <h5 class="card-header bg-white">Create an Account</h5>
                <div class="row card-body">
                    <div class="col-md-6 mb-2">
                        <label  class="form-label">Full Name:</label>
                        <input type="text" name="" class="form-control" id="">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label  class="form-label">Email:</label>
                        <input type="email" name="" class="form-control" id="">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label  class="form-label">Phone Number:</label>
                        <input type="tel" name="" class="form-control" id="">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label  class="form-label">Date of birth:</label>
                        <input type="date" name="" class="form-control" id="">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label  class="form-label">Password:</label>
                        <input type="password" name="" class="form-control" id="">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label  class="form-label">Confirm Password:</label>
                        <input type="password" name="" class="form-control" id="">
                    </div>

                    <div class="col-12 my-3">
                        <button class="btn btn-dark">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>