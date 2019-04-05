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
                                <h4 class="title">Grafik Penjualan</h4>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Bounce
                                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
@endsection
