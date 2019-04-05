@extends('admin.master')

@section('content')
                  <div class="header">
                      <h4 class="title">Edit Kategori</h4>
                  </div>
                      <div class="card-body content">
                       @include('layouts.validasi')

                          {!! Form::model($kategori,['route'=>['kategori.update',$kategori->id],'method'=>'PUT']) !!}

                            <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Nama kategori</label>
                                    <div class="col-md-6">
                                      {!! Form::text('nama_kategori',null,['class'=>'form-control']) !!}
                                    </div>
                            </div>

                             <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Deskripsi</label>
                                    <div class="col-md-6">
                                      {!! Form::text('deskripsi',null,['class'=>'form-control']) !!}
                                    </div>
                            </div>

                            <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-2">
                                        <button type="submit" class="btn btn-danger">Update data</button>
                                        <a href="{{ route('kategori.index') }}" class="btn btn-info">Kembali</a>
                                    </div>
                          </div>
                      </div>
@endsection
