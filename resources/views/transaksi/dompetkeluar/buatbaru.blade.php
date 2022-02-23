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
                        <h2>DOMPET KELUAR</h2>
                    </div>
                    <div class="col-md-1.5 mg">
                        <h6>- Buat Baru</h6>
                    </div>
                    <div class="col-md-8">
                        <a type="button" class="btn btn-primary kanan" href="/transaksidompetkeluar">Kelola Dompet Baru</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <label for="kode">Kode:</label>
                        <input type="text" class="form-control" id="kode" placeholder="kode">
                    </div>
                    <div class="col-md-3">
                        <label for="kode">Tanggal:</label>
                        <input type="date" class="form-control" id="kode" placeholder="kode">
                    </div>
                    <div class="col-md-3">
                        <label for="kode">Kategori:</label>
                        <select class="form-control" id="sel1">
                            <option>Pemasukan</option>
                            <option>Pengeluaran</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="kode">Dompet:*</label>
                        <select class="form-control" id="sel1">
                            <option>Dompet Utama</option>
                            <option>Dompet Cadangan</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="nilai">Nilai:*</label>
                        <input class="form-control kanan" rows="5" id="nilai" placeholder="0">
                    </div>
                    <div class="col-md-12">
                        <label for="des">Deskripsi:</label>
                        <input class="form-control" rows="5" id="des" placeholder="">
                    </div>
                    <div class="col-md-12 mg">
                        <button class="btn btn-primary" type="button" >Simpan
                        </button>
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
