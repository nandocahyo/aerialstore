@extends('admin.master')

@section('content')
      
                    <div class="card-body content">
                      @include('layouts.validasi')
                    <h3>Form Transaksi</h3>
                    <table class="table table-bordered">
                            {!! Form::open(['route'=>'transaksi.store','method'=>'POST']) !!}
                          <tr><td>

                            <div class="col-md-12">
                                    {!! Form::select('id_customer',\App\Customer::pluck('nama','id'),null,['class'=>'form-control']) !!}
                                </div>
                           </td></tr>
                        <tr><td>

                                <div class="col-md-12">
                                    {!! Form::select('id_produk',\App\Produk::pluck('nama','id'),null,['class'=>'form-control']) !!}
                                </div>
                           </td></tr>
                        <tr><td>
                          
                                <div class="col-md-12">
                                  {!! Form::number('qty',null,['class'=>'form-control']) !!}
                                </div>
                         </td></tr>
                          <tr><td>
                                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                                 <a href="{{ route('transaksi.update') }}" class="btn btn-danger">Selesai</a>
                            </td></tr>
                    </table>

                    {!! Form::close() !!}

                    <table class="table table-bordered">
                        <tr class="success"><th colspan="7">Detail Transaksi</th></tr>
                        <tr>
                         <th>No</th>
                         <th>Nama Pelanggan</th>
                         <th>Nama Drone</th>
                         <th>Qty</th>
                         <th>Harga Drone</th> 
                         <th>Subtotal</th>
                         <th>Cancel</th>
                       </tr>
                        <?php $no=1; $total=0; ?>
                         @foreach ($transaksi as $item)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{ $item->customer->nama }}</td>
                                <td>{{ $item->produk->nama }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->produk->harga }}</td>
                                <td>{{ $item->produk->harga*$item->qty }}</td>

                                {!! Form::open(['route'=>['transaksi.destroy',$item->id],'method'=>'DELETE']) !!}
                                <td>
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </td>
                            </tr>
                                {!! Form::close() !!}
                                <?php $no++ ?>
                                <?php $total=$total+($item->produk->harga*$item->qty) ?>
                       @endforeach
                                <tr>
                                    <td colspan="5"><p align="right">Total</p>
                                    </td><td>{{$total}}</td>
                                    <input type="text" value="{{$total}}" style="width:20%;" required disabled>
                                </tr>
                    </table>
                </div>
                 
@endsection
