@extends('admin.master')

@section('content')
                <!--  <div class="col-md-6">
                    <img src="{{url('assets/source/img/undraw_drone_delivery_5vrm.png')}}">
                </div>      -->
                 <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">Selamat Datang Admin</h4>
                                <p class="category">Drone siap lepas landas tuan</p>
                            </div>
                            <div class="content">
                                 <img src="{{url('assets/source/img/undraw_drone_delivery_5vrm.png')}}" width="100%">
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Statistik</h4>
                            </div>
                            <div class="content">

                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Nama</th>
                                        <th>Jumlah</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Kategori</td>
                                            <td style="color: #f4425f">{{$categori}}</td>
                                        </tr>
                                        <tr>
                                            <td>Produk</td>
                                            <td style="color: #f4425f">{{$product}}</td>
                                        </tr>
                                        <tr>
                                            <td>Customer</td>
                                            <td style="color: #f4425f">{{$customer}}</td>
                                        </tr>
                                        <tr>
                                            <td>Transaksi</td>
                                            <td style="color: #f4425f">{{$transaction}}</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            </div>
                        </div>
                    </div>     
@endsection
