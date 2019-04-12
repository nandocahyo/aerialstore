@extends('admin.master')

@section('content')

                            <div class="header">
                                <h4 class="title">Laporan Penjualan Drone</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                      <th>No</th>
                                      <th>Nama Produk</th>
                                      <th>Harga</th>
                                      <th>Subtotal</th>
                                      <th>Tanggal</th>
                                    </thead>
                                    <tbody>
                                      <?php $no=1; ?>
                                  
                                      @foreach($transaksi as $item)
                                        <tr>
                                          <td>{{no}}</td>
                                          <td>{{$item->produk->nama}}</td>
                                          <td>$36,738</td>
                                          <td>Niger</td>
                                          <td>Oud-Turnhout</td>
                                        </tr>
                                      <?php $no++; ?>
                                      @endforeach
                                    </tbody>
                                </table>

                            </div>
                        
@endsection
