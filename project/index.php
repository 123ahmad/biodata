<?php
@session_start();
include "koneksi.php";
if(@$_SESSION['admin'] || @$_SESSION['pegawai'] || @$_SESSION['pengurus'])
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!-- header -->
        <?php require_once("./partials/_header.php"); ?>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <!-- logo -->
                    <?php require_once("./partials/_logo.php"); ?>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <!-- sidebar -->
                <?php require_once("./partials/_sidebar_menu.php"); ?>
            </div>
        </div>
        <div class="app-main__outer">
            <div class="app-main__inner">
                <!-- main content -->
                <?php

                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                     
                            switch ($page) {
                                case 'input-obat':
                                    include "input-obat.php";
                                    break;
                                case "input-apotik":
                                    include "input-apotik.php";
                                    break;    
                                case 'input-bacot': 
                                    include "input-bacot.php";
                                    break; 
                                case 'input-pasien':
                                    include "input-pasien.php";
                                    break;
                                case 'input-tindakan':
                                    include "input-tindakan.php";
                                         break;    
                                case 'data-keluhan':
                                    include "data-keluhan.php";
                                    break;
                                default:
                                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                                    break;
                            }
                        }else{
                            include "pager/dashboard.php";
                        } 
                // $menu = @$_GET['menu'];

                // switch ($menu) {
                //     case 'input-obat':
                //         require_once 'input-obat.php';
                //         break;
                //      case 'input-apotik':
                //         require_once 'input-apotik.php';
                //         break;
                //     case 'input-bacot':
                //         require_once '';
                //         break;
                //     case 'input-laporan':
                //         require_once '';
                //         break;
                //     case 'input-pasien':
                //         require_once 'input-pasien.php';
                //         break;
                //     case 'input-tindakan':
                //         require_once 'input-tindakan.php';
                //         break;
                //     case 'data-keluhan':
                //         require_once 'data-keluhan.php';
                //         break;
                    
                    
                //     default:
                //         #
                //         break;
                // }
                ?>

            </div>
            <div class="app-wrapper-footer">
                <!-- footer -->
                <?php require_once("./partials/_footer.php"); ?>
            </div>
        </div>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    </div>
    </div>
    <script type="text/javascript" src="assets/scripts/main.js"></script>
</body>

</html>