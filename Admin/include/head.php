<!-- session -->
<?php
        session_start();

        // Cek apakah pengguna sudah login
        $loggedIn = isset($_SESSION['username']);
        if ($_SESSION['status'] != "Login" && $_SESSION['status'] != "Daftar") {
          header("Location: ./login.php?pesan=Belum_login");
          exit();
        }
        $username = $_SESSION['username'];
  ?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Pertakina | Admin</title>

    <link rel="shortcut icon" href="https://pertakina.org/wp-content/uploads/2020/06/favicon.png" type="image/x-icon" />

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.css" rel="stylesheet" />
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <!-- SweetAlert2 JS -->
</head>