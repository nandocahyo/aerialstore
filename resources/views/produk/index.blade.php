@extends('admin.master')

@section('content')

                            <div class="header">
                                <h4 class="title">Data Produk</h4>
                                <div class="box-header">
                                	<a href="{{ route('produk.create')}}" class="btn btn-success btn-fill btn-sm"><i class="fa fa-plus-circle"></i>Tambah Produk</a>
                                	<a href="{{ route('produk.barcode')}}" class="btn btn-info btn-fill btn-sm"><i class="fa fa-barcode"></i>Cetak Barcode</a>

                                </div>
                             
                            </div>

                            <div class="content table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Kode Produk</th>
                                      <th>Nama</th>
                                      <th>Kategori</th>
                                      <th>Foto</th>
                                      <th>Deskripsi</th>
                                      <th>Stok</th>
                                      <th>Harga</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                    </tr>
                                  </thead>
                                
                                  <tbody>
                                      <?php $no=1; ?>
                                      @foreach ($produk as $row)
                                      <tr>
                                          <td>{{ $no }}</td>
                                          <td>{{ $row->kode_produk }}</td>
                                          <td>{{ $row->nama }}</td>
                                          <td>{{ $row->kategori->nama_kategori }}</td>
                                          <td>
                                          	{!! Html::image('uploads/' . $row->foto, $row->nama,['class' => 'media-object','width' => 100, 'heigth' => 100]) !!}
                                          </td>
                                          <td>{{ $row->deskripsi }}</td>
                                          <td>{{ $row->stok }}</td>
                                          <td>{{ $row->harga }}</td>
                                          <td>
                                            <a href="{{ route('produk.edit',$row->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                          </td>
                                            {!! Form::open(['route'=>['produk.destroy',$row->id],'method'=>'Delete']) !!}
                                          <td><button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button></td>
                                            {!! Form::close() !!}
                                      </tr>
                                      <?php $no++; ?>
                                      @endforeach
                                  </tbody>
                                </table>

                            </div>
@endsection
