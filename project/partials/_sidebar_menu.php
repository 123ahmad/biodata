<?php
@session_start();
include "koneksi.php";
if(@$_SESSION['admin'] || @$_SESSION['pegawai'] || @$_SESSION['pengurus'])
?>

        <div class="app-header__menu">  
            <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>
        <div class="scrollbar-sidebar">
            <div class="app-sidebar__inner">
                <ul class="vertical-nav-menu">
<?php
if(@$_SESSION['level']=="admin") {?>

                    <li class="app-sidebar__heading">USER</li>
                    <li>
                        <a href="">
                            <i class=""></i>
                            ADMIN
                        </a>
                    </li>
<?php
}?>
<?php
if(@$_SESSION['level']=="pegawai") {?>
                    <li class=>USER</li>
                    <li>
                        <a href="">
                            <i class=""></i>
                            PEGAWAI
                        </a>
                    </li>
                <?php
                }?>

                    <li class="app-sidebar__heading">Rekam Medis</li>
                    <li>
                        <a href="#">
                            <i class=""></i>
                            Obat
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="index.php?page=input-obat">
                                    <i class="metismenu-icon">
                                    </i>Input obat
                                </a>
                            </li>
                            <li>
                                <a href="index.php?page=input-apotik">
                                    <i class="metismenu-icon">
                                    </i>Input apotik
                                </a>
                            </li>
                            <li>
                                <a href="index.php?page=input-bacot">
                                    <i class="metismenu-icon">
                                    </i>Input Bacot
                                </a>
                            </li>
                            <li>
                                <a href="index.php?page=input-laporan">
                                    <i class="metismenu-icon">
                                    </i>Input Laporan
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class=""></i>
                            Pasien
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="index.php?page=input-pasien">
                                    <i class="metismenu-icon">
                                    </i>Input pasien
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="metismenu-icon">
                                    </i>Input 
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="metismenu-icon">
                                    </i>Input
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class=""></i>
                            Poliklinik
                        </a>
                    </li>

                    <li class="app-sidebar__heading">Keluhan</li>
                    <li>
                        <a href="index.php?page=data-keluhan">
                            <i class="metismenu-icon"></i>
                            Data keluhan
                        </a>
                    </li>
                    <li>
                        <a href="index.php?page=input-tindakan">
                            <i class=""></i>
                            Input Tindakan
                    </li>
                </ul>
            </div>