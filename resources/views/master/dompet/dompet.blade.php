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
                        <h2>DOMPET</h2>
                    </div>
                    <div class="col-md-1.5 mg">
                        <h6>- Aktif</h6>
                    </div>
                    <div class="col-md-10">
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
                        <a type="button" class="btn btn-primary kanan" href="/dompetbuatbaru">Buat Baru</a>
                    </div>
                </div>
            <table id="table" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>REFERENSI</th>
                <th>DESKRIPSI</th>
                <th>STATUS_ID</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @php $no=0; @endphp
            @foreach ($data_dompet as $item)
            @php $no++; @endphp
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$item->Nama}}</td>
                    <td>{{$item->Referensi}}</td>
                    <td>{{$item->Deskripsi}}</td>
                    <td>{{$item->Status_ID}}</td>
                    <td>
                        <div class="dropdown kanan">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>Dompet Utama</li>
                                <li>
                                    <a>
                                        <i class='bx bx-search-alt-2'></i>
                                        <a class="link_name" href="/dompetdetail">Detail</a>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <i class='bx bxs-edit-alt'></i>
                                        <a class="link_name" href="/dompetubah">Ubah</a>
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
            @endforeach
            

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
