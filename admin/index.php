<?php include("../functions.php");
if ((!isset($_SESSION['uid']) && !isset($_SESSION['username']) && isset($_SESSION['user_level'])))  header("Location: login.php");
if ($_SESSION['user_level'] != "admin") header("Location: login.php"); ?> <?php include 'header.php'; ?><div class="col-12 col-md-3"> <img class="img-fluid" src="../image/bg-2.png" /></div>
<div class="col-12 col-md-6 p-3 p-md-5 text-center">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active p-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <p>Selamat Datang Admin, ini adalah aplikasi kasir restoran anda.</p>
        </div>

    </div>
</div>