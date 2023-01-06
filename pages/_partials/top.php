<?php
session_start();
if (!isset($_SESSION['user'])) {
    // jika user belum login
    header('Location: ../login');
    exit();
}
?>
<!Doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Pendataan Warga</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- custom style for this template -->
    <link href="../../assets/css/dashboard.css" rel="stylesheet">

    <!-- ikon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <!-- DataTable CSS -->
    <link href="../../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Select style-->
    <link rel="stylesheet" href="../../assets/css/bootstrap-select.min.css">

    <!-- warna datatables pagenation -->
    <style>
        .pagination>.active>a,
        .pagination>.active>a:hover,
        .pagination>.active>a:focus{
            background-color: #5cb85c;
            border-color: #4cae4c;
        }
    </style>

    <!-- warna border -->
    <style>
        .dropdown-menu>.active>a{
            background-color: #5cb85c;
        }
    </style>

    <!-- notifikasi css -->
    <link href="../../assets/css/notifikasi.css" rel="stylesheet">

    <!-- grafik dashboard -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

</head>

<body>
    <?php include('navbar.php') ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <?php include('sidebar.php') ?>
            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">