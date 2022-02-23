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
                        <h6>- Detail</h6>
                    </div>
                    <div class="col-md-9">
                        <a type="button" class="btn btn-primary kanan" href="/dompet">Kelola Dompet</a>
                    </div>
                </div>
            
                <div class="container">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="usr">Nama:</label>
                                    <input type="text" class="form-control" id="usr" disabled placeholder="Nama">
                                </div>
                                <div class="col-md-6">
                                    <label for="ref">Referensi:</label>
                                    <input type="text" class="form-control" id="ref" disabled placeholder="Referensi">
                                </div>
                                <div class="col-md-12">
                                    <label for="des">Deskripsi:</label>
                                    <textarea class="form-control" rows="5" id="des" disabled placeholder="Deskripsi"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="sel1">Status:</label>
                                    <input type="text" class="form-control" id="usr" disabled placeholder="Status">
                                </div>
                            </div>
                        </div>
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
