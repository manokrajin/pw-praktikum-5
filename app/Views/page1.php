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

        .carousel-item {
            height: 32rem;
        }

        .table {
            width: 80%;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border: black;
        }
    </style>

</head>

<header>

    <h1>Thermodity</h1>
    <h3>The new e-cosystem</h3>

</header>

<?php
$status1 = 'off';
$status2 = 'off';
$status3 = 'off';
?>

<body>
    <ul class="navbar bg-dark justify-content-center ">
        <li class="nav-item">
            <a class="nav-link text-success" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-success" href="#">Page 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-success" href="#">Page 2</a>
        </li>
    </ul>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Device Name</th>
                <th scope="col">Device Brand</th>
                <th scope="col">Device Quantity</th>
                <th scope="col">Device Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>DHT 11</td>
                <td>DHT</td>
                <td>1</td>
                <td>
                    <?php echo $status1 ?>
                    <form method="post">
                        <input type="hidden" value="t">
                        <input type="submit" value="Switch" name="dev1">
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (strcmp($status1, "off")) {
                            $status1 = "on";
                        } else {
                            $status1 = "off";
                        }
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Thermometer</td>
                <td>Konami</td>
                <td>1</td>
                <td><?php echo $status2 ?>
                    <form method="post">
                        <input type="hidden" value="t">
                        <input type="submit" value="Switch" name="dev2">
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Sprinklers</td>
                <td>Yundai</td>
                <td>5</td>
                <td><?php echo $status3 ?>
                    <form method="post">
                        <input type="hidden" value="t">
                        <input type="submit" value="Switch" name="dev3">
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>

</body>