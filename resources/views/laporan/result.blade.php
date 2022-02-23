<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="assets/DataTables/Buttons-1.5.6/css/buttons.bootstrap4.min.css">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
<head>
        <title>Atomic Indonesia</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body cl">
                <div class="row">
                    <div class="col-md-12">
                        <a type="button" class="btn btn-info kanan" href="/laporan">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <table id="table-datatables" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>TANGGAL</th>
                            <th>KODE</th>
                            <th>DESKRIPSI</th>
                            <th>DOMPET</th>
                            <th>KATEGORI</th>
                            <th>NILAI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2019-03-08</td>
                            <td>WIN00000002</td>
                            <td>Gaji bulan Januari</td>
                            <td>Dompet Utama</td>
                            <td>Pengeluaran</td>
                            <td>(-) 3.500.000</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>2019-03-08</td>
                            <td>WIN00000001</td>
                            <td>Saldo Awal</td>
                            <td>Dompet Utama</td>
                            <td>Pemasukan</td>
                            <td>(+) 500.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>


    <script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="assets/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

	<script type="text/javascript">
    $(document).ready(function () {
        $('#table-datatables').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });
    </script>

