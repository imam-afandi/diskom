@extends('layouts.frontend.index')
@section('content')
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-md-4 col-lg-8 justify-content-center">
                <div class="judul wow fadeInUp" data-wow-delay="0.3s">  
                    <h3  style="text-align: left"> {{ $data->jabatan->nama }}</h3>
                </div>
            <div class="row  py-2">
                    <div class="col-md-2 col-lg-4 justify-content-center">
                        <img src="{{ asset('fotopegawai/'.$data->foto)}}" style="width: 100% ;" >
                    </div>
                    <div class="col-md-2 col-lg-8 justify-content-center">
                        <div class="table-responsive">
                            <table bordered="0" class="table" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>{{ $data->nama}}</td>
                                    </tr>
                                    <tr>
                                        <td>Nip</td>
                                        <td>:</td>
                                        <td>{{ $data->nip}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Tanggal Lahir</td>
                                        <td>:</td>
                                        <td>{{ $data->tempat_lahir}}, {{ $data->tanggal_lahir}}</td>
                                    </tr>
                                    <tr>
                                        <td>Pangkat, Gol. Ruang</td>
                                        <td>:</td>
                                        <td>{{ $data->pangkat_gol_ruang}}</td>
                                    </tr>
                                 </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=" wow fadeInUp mt-4 justify-content" style="text-align: justify" data-wow-delay="0.5s  "> 
                            {!! $data->tugas_fungsi !!}
                </div>
            </div>
        </div>
    </div>
@endsection