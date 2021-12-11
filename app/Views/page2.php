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
            <a class="nav-link text-success" aria-current="page" href="<?php echo base_url() ?>/homePage">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-success" href="<?php echo base_url() ?>/page1">Page 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-success" href="<?php echo base_url() ?>/page2">Page 2</a>
        </li>
    </ul>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Device Id</th>
                <th scope="col">Device Defect</th>
                <th scope="col">Device Origin</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($Device_Detail as $d) : ?>
                <tr>
                    <td><?= $d['Id']; ?></td>
                    <td><?= $d['Device_id']; ?></td>
                    <td><?= $d['Device Defect']; ?></td>
                    <td><?= $d['Device Origin']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>