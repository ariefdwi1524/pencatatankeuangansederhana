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
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1.5">
                        <h2>KATEGORI</h2>
                    </div>
                    <div class="col-md-1.5 mg">
                        <h6>- Aktif</h6>
                    </div>
                    <div class="col-md-9">
                        <div class="dropdown kanan">
                            <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Semua
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Semua</a></li>
                                <li><a href="#">Aktif</a></li>
                                <li><a href="#">Tidak Aktif</a></li>
                            </ul>
                        </div>
                        <a type="button" class="btn btn-primary kanan" href="/kategoribuatbaru">Buat Baru</a>
                    </div>
                </div>
            <table id="table" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>DESKRIPSI</th>
                <th>STATUS</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Pengeluaran</td>
                <td>Kategori untuk Pengeluaran</td>
                <td>Aktif</td>
                <td>
                    <div class="dropdown kanan">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>Pengeluaran</li>
                            <li>
                                <a>
                                    <i class='bx bx-search-alt-2'></i>
                                    <a class="link_name" href="/kategoridetail">Detail</a>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class='bx bxs-edit-alt'></i>
                                    <a class="link_name" href="/kategoriubah">Ubah</a>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class='bx bx-x'></i>
                                    <a class="link_name" href="#">Tidak Aktif</a>
                                </a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Pemasukan</td>
                <td>Kategori untuk pemasukan</td>
                <td>Aktif</td>
                <td>
                    <div class="dropdown kanan">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>pemasukan</li>
                            <li>
                                <a>
                                    <i class='bx bx-search-alt-2'></i>
                                    <a class="link_name" href="#">Detail</a>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class='bx bxs-edit-alt'></i>
                                    <a class="link_name" href="#">Ubah</a>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class='bx bx-x'></i>
                                    <a class="link_name" href="#">Tidak Aktif</a>
                                </a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            
            <tr>
                <td>3</td>
                <td>Lain - Lain</td>
                <td>Kategori untuk Lain - Lain</td>
                <td>Aktif</td>
                <td>
                    <div class="dropdown kanan">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>Lain - Lain</li>
                            <li>
                                <a>
                                    <i class='bx bx-search-alt-2'></i>
                                    <a class="link_name" href="#">Detail</a>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class='bx bxs-edit-alt'></i>
                                    <a class="link_name" href="#">Ubah</a>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class='bx bx-x'></i>
                                    <a class="link_name" href="#">Tidak Aktif</a>
                                </a>
                            </li>
                        </ul>
                    </div>
                </td>
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
