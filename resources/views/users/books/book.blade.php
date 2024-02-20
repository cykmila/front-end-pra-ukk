@extends('main')
@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="row">
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <div class="d-flex justify-content-end m-2">
                        @can('admin')  
                        <a href="/book/create/admin" class="btn icon icon-left btn" style="background-color: rgb(160, 100, 118)"><i
                                class="bi bi-book-fill"></i> Add</a>
                        @endcan
                    </div>
            
                    <div class="card-body">
                        <img class="img-fluid w-100" src="{{ asset('img/novel1.jpg') }}" alt="Card image cap">
                        <h4 class="card-title mt-3">MATAHARI</h4>
                        <p class="card-text" style="font-size: 65%">
                            Cerita ini dibuka dengan suasana duka yang menyelimuti Raib, Seli, dan Ali atas tewasnya Ily
                            saat pertarungan di klan Matahari (di novel sebelumnya). Para ksatria dari klan Bulan pun turut
                            merasakan yang sama, hingga membuat Miss Selena tak dapat pulang ke klan Bumi. Saat mereka
                            kembali ke klan Bumi, seperti biasa, disambut oleh tugas-tugas selayaknya anak sekolahan pada
                            umumnya.
                            Lantas, bagaimanakah nasib ketiga sekawan itu? Akankah ada kekuatan yang dapat mengeluarkan dan
                            membebaskan mereka dari ruangan tersebut? Ikut keseruan kisah petualangan Raib, Ali, dan Seli
                            dalam menghadapi berbagai pertarungan yang terjadi di klan Bintang dengan membaca novel ketiga
                            dari serial Bumi, yakni Matahari.

                        </p>
                    </div>
                </div>
                <div class="d-flex justify-content-end mr-3">
                    <div class="d-inline-block mb-2 me-1">
                        <div data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Book">
                            <a href="/book-detail">
                                <button class=" button-detail-books btn btn text-white">Detail
                                    <i class="bi bi-eye-fill"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    @can('admin')     
                    <div class="d-flex justify-content-end mr-3">
                        <div class="d-inline-block mb-2 me-1">
                            <div data-bs-toggle="tooltip" data-bs-placement="top" title="edit book">
                                <a href="/book/edit/admin" class="btn icon btn"><i class="bi bi-pencil"></i></a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mr-3">
                            <div class="d-inline-block mb-2 me-1">
                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="delete book">
                                    <a href="#" class="btn icon btn"><i class="bi bi-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endcan
                    
                </div>
            </div>
            
        </div>
    </div>
@endsection
