<!DOCTYPE html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        header {
            padding: 80px;
            text-align: center;
            background: #1abc9c;
            color: white;
        }

        .carousel {
            margin-right: auto;
            margin-left: auto;
            padding-left: 50px;
            padding-right: 50px;
        }

        .carousel-item {
            height: 32rem;
        }
    </style>

</head>

<header>

    <h1>Thermodity</h1>
    <h3>The new e-cosystem</h3>

</header>


<body>
    <ul class="navbar bg-dark justify-content-center ">
        <li class="nav-item">
            <a class="nav-link text-success" aria-current="page" href="<?php echo base_url() ?>/homePage">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-success" href="<?php echo base_url() ?>/page1">Page 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-success" href="#">Page 2</a>
        </li>
    </ul>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="src/hutan1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="src/hutan2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="src/hutan3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div id="demo" class="carousel slide m-3" data-bs-ride="carousel">
        <p>
            Thermodity adalah sebuah alat untuk mencipattakan sebuah ekosistem baru dalam sebuah ruangan. <br>
            Alat ini nantinya akan memajukan teknologi sehingga kita dapat menumbuhkan semua pohon atau tanaman
            yang bahkan tidak cocok dengan kondisi klimis Indonesia
        </p>

</body>