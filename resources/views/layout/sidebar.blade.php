<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="assets/DataTables/Buttons-1.5.6/css/buttons.bootstrap4.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <div class="sidebar close">
        <ul class="nav-links">
            <li>
                <div class="iocn-link">
                    <a>
                    <i class='bx bx-wallet-alt' ></i>
                    <span class="link_name">Master</span>
                    </a>
                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" >Master</a></li>
                    <li><a href="/dompet">Dompet</a></li>
                    <li><a href="/kategori">Kategori</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a>
                    <i class='bx bx-money' ></i>
                    <span class="link_name">Transaksi</span>
                    </a>
                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" >Transaksi</a></li>
                    <li><a href="/transaksidompetmasuk">Dompet Masuk</a></li>
                    <li><a href="/transaksidompetkeluar">Dompet Keluar</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a>
                    <i class='bx bxs-report'></i>
                    <span class="link_name">Laporan</span>
                    </a>
                    <i class="bx bxs-chevron-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" >Laporan</a></li>
                    <li><a href="/laporan">Laporan Transaksi</a></li>
                </ul>
            </li>
        </ul>
        </div>        
            <section class="home-section">
                @yield('content')
            </section>
    </body>

    <script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="assets/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>