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
                    <div class="col-md-3.5">
                        <h2>LAPORAN</h2>
                    </div>
                    <div class="col-md-1.5 mg">
                        <h6>- Transaksi</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h3>TRANSAKSI</h3>
                    </div>
                    <div class="col-md-3">
                        <label for="kode">Tanggal Awal:</label>
                        <input type="date" class="form-control" id="kode" placeholder="kode">
                    </div>
                    <div class="col-md-3">
                        <label for="kode">Tanggal Akhir:</label>
                        <input type="date" class="form-control" id="kode" placeholder="kode">
                    </div>
                    <div class="col-md-6">
                        <label >Status:</label>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                            <label class="form-check-label" for="check1">Tampilkan Uang Masuk</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                            <label class="form-check-label" for="check2">Tampilkan Uang Keluar</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="kode">Kategori:</label>
                        <select class="form-control" id="sel1">
                            <option>Semua</option>
                            <option>Pemasukan</option>
                            <option>Pengeluaran</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="kode">Dompet:*</label>
                        <select class="form-control" id="sel2">
                            <option>Semua</option>
                            <option>Dompet Utama</option>
                            <option>Dompet Cadangan</option>
                        </select>
                    </div>
                    <div class="col-md-12 mg">
                        <a class="btn btn-primary" type="button" href="/result">Buat Laporan</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>

<footer>
        <span class="text">Maju Bersama Atomic Indonesia</span>
</footer>

@endsection
