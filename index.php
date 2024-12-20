<?php

session_start();

// include_once("function/koneksi.php");
// include_once("function/helper.php");

$page = isset($_GET['page']) ? $_GET['page'] : 'main';

$lgotomain = 'http://' . $_SERVER['HTTP_HOST'] . '/mybalancemanager';
$ltransaksi = 'index.php?page=transaksi';
$llaporan = 'index.php?page=laporan';
$lgendefault = 'index.php?page=gendefault';
$lpgnotfound = 'index.php?page=pgnotfound';

$tdashboard = 'Dashboard';
$ttransaksi = 'Transaksi';
$tlaporan = 'laporan';
$tgendefault = 'General Defaults';

$_SESSION['lgotomain'] = $lgotomain;

$_SESSION['tdashboard'] = $tdashboard;
$_SESSION['ttransaksi'] = $ttransaksi;
$_SESSION['tlaporan'] = $tlaporan;
$_SESSION['tgendefault'] = $tgendefault;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>My Balance Manager</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- <link rel="preload" href="font/Montserrat/transfonter/Montserrat-Light.woff2" as="font" type="font/woff2"> -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="layout">
    <!-- Sidebar -->
    <div class="bg-info sidebar" id="sidebar">
      <div class="sidebar-heading text-white">My Balance Manager</div>
      <div class="list-group list-group-flush">
        <a
          href="<?php echo $lgotomain; ?>"
          class="list-group-item list-group-item-action bg-info text-white"><?php echo $tdashboard ?></a>
        <a
          href="<?php echo $ltransaksi; ?>"
          class="list-group-item list-group-item-action bg-info text-white"><?php echo htmlspecialchars($ttransaksi); ?></a>
        <a
          href="<?php echo $llaporan; ?>"
          class="list-group-item list-group-item-action bg-info text-white"><?php echo htmlspecialchars($tlaporan); ?></a>
        <a
          href="<?php echo $lgendefault; ?>"
          class="list-group-item list-group-item-action bg-info text-white"><?php echo htmlspecialchars($tgendefault); ?></a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="main-content" class="main-content">
      <nav
        class="d-none d-sm-block navbar navbar-expand-lg navbar-light bg-light border-bottom fixed-top">
        <button class="btn" id="menu-toggle">
          <i class="fa-solid fa-bars"></i>
        </button>
      </nav>

      <!-- Dynamic Content -->
      <div class="container-fluid mt-0 mt-sm-5">
        <h3 class="d-sm-none mb-4"><u>My Balance Manager</u></h3>
        <?php

        $filename = "$page.php";

        if (file_exists($filename)) {
          include_once($filename);
        } else {
            header("Location: $lpgnotfound");
            exit();
        }
        ?>
      </div>

      <button id="toTopButton" class="btn btn-primary rounded-circle">
        ↑
      </button>

      <!-- Footer -->
      <footer class="bg-light text-center py-3">
        <div class="container">
          <p class="mb-0">
            &copy; <span id="year"></span> My Balance Manager. All Rights
            Reserved.
          </p>
          <p class="mb-0">
            <a href="#" class="me-3">Privacy Policy</a>
            <a href="#" class="">Terms of Service</a>
          </p>
        </div>
      </footer>
    </div>
    <!-- /#page-content-wrapper -->
  </div>

  <!-- Bottom Navbar (visible only on small devices) -->
  <nav class="navbar navbar-dark bg-dark fixed-bottom d-flex d-sm-none">
    <ul class="navbar-nav nav-justified w-100 d-flex justify-content-around">
      <li class="nav-item flex-grow-1">
        <a class="nav-link text-white" href="<?php echo $lgotomain; ?>"><?php echo $tdashboard ?></a>
      </li>
      <li class="nav-item flex-grow-1">
        <a class="nav-link text-white" href="<?php echo $ltransaksi; ?>"><?php echo htmlspecialchars($ttransaksi); ?></a>
      </li>
      <li class="nav-item flex-grow-1">
        <a class="nav-link text-white" href="<?php echo $llaporan; ?>"><?php echo htmlspecialchars($tlaporan); ?></a>
      </li>
      <li class="nav-item flex-grow-1">
        <a class="nav-link text-white" href="<?php echo $lgendefault; ?>"><?php echo htmlspecialchars($tgendefault); ?></a>
      </li>
    </ul>
  </nav>

  <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="script.js"></script>
</body>

</html>