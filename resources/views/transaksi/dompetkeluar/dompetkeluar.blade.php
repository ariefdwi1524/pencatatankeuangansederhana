@extends('layout.sidebar')


@section('content')

<head>
        <title>Atomic Indonesia</title>
</head>

    <div class="home-content">
        <i class='bx bx-menu' ></i>
        <span class="text">Dompet ARIEF DWI PANGESTU</span>
    </div>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body cl">
                <div class="row">
                    <div class="col-md-6">
                        <h2>DOMPET KELUAR</h2>
                    </div>
                    <div class="col-md-6">
                        <a type="button" class="btn btn-primary kanan" href="/dompetkeluarbuatbaru">Buat Baru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <table id="table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>TANGGAL</th>
                            <th>KODE</th>
                            <th>DESKRIPSI</th>
                            <th>KATEGORI</th>
                            <th>NILAI</th>
                            <th>DOMPET</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2019-03-08</td>
                            <td>WIN00000002</td>
                            <td>Gaji bulan Januari</td>
                            <td>Pengeluaran</td>
                            <td>(-) 3.500.000</td>
                            <td>Dompet Utama</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>2019-03-08</td>
                            <td>WIN00000001</td>
                            <td>Saldo Awal</td>
                            <td>Pengeluaran</td>
                            <td>(-) 100.000</td>
                            <td>Dompet Cadangan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<footer>
        <span class="text">Maju Bersama Atomic Indonesia</span>
</footer>
    

@endsection
