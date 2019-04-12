@extends('admin.master')

@section('content')

                            <div class="header">
                                <h4 class="title">Data Customer</h4>
                                <a href="{{ route('customer.create')}}" class="btn btn-success btn-fill btn-sm"><i class="fa fa-plus-circle"></i>Tambah Customer</a>
                                
                            </div>
                            <div class="content table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Nama</th>
                                      <th>Telepon</th>
                                      <th>Alamat</th>
                                      <th>Email</th>
                                      <th>Edit</th>
                                      <th>Delete</th>
                                    </tr>
                                  </thead>
                                
                                  <tbody>
                                      <?php $no=1; ?>
                                      @foreach ($cus as $row)
                                      <tr>
                                          <td>{{ $no }}</td>
                                          <td>{{ $row->nama }}</td>
                                          <td>{{ $row->telepon }}</td>
                                          <td>{{ $row->alamat }}</td>
                                          <td>{{ $row->email }}</td>
                                          <td>
                                            <a href="{{ route('customer.edit',$row->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                          </td>
                                            {!! Form::open(['route'=>['customer.destroy',$row->id],'method'=>'Delete']) !!}
                                          <td><button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button></td>
                                            {!! Form::close() !!}
                                      </tr>
                                      <?php $no++; ?>
                                      @endforeach
                                  </tbody>
                                </table>

                            </div>
@endsection
