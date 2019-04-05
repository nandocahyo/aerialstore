@extends('admin.master')

@section('content')

                            <div class="header">
                                <h4 class="title">Data Kategori</h4>
                                <a href="{{ route('kategori.create')}}" class="btn btn-success btn-fill btn-sm"><i class="fa fa-plus-circle"></i>Tambah Kategori</a>

    
                            </div>
                            <div class="content table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Nama Kategori</th>
                                      <th>Deskripsi</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                    </tr>
                                  </thead>
                                
                                  <tbody>
                                      <?php $no=1; ?>
                                      @foreach ($kategori as $item)
                                      <tr>
                                          <td>{{ $no }}</td>
                                          <td>{{ $item->nama_kategori }}</td>
                                          <td>{{ $item->deskripsi }}</td>
                                          <td>
                                            <a href="{{ route('kategori.edit',$item->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                          </td>
                                            {!! Form::open(['route'=>['kategori.destroy',$item->id],'method'=>'Delete']) !!}
                                          <td><button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button></td>
                                            {!! Form::close() !!}
                                      </tr>
                                      <?php $no++; ?>
                                      @endforeach
                                  </tbody>
                                </table>

                            </div>
@endsection
