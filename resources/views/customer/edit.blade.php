@extends('admin.master')

@section('content')
                  <div class="header">
                      <h4 class="title">Edit Customer</h4>
                  </div>
                      <div class="card-body content">
                       @include('layouts.validasi')

                          {!! Form::model($cus,['route'=>['customer.update',$cus->id],'method'=>'PUT']) !!}

                            <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Nama</label>
                                    <div class="col-md-6">
                                      {!! Form::text('nama',null,['class'=>'form-control']) !!}
                                    </div>
                            </div>

                            <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Telepon</label>
                                    <div class="col-md-6">
                                      {!! Form::text('telepon',null,['class'=>'form-control']) !!}
                                    </div>
                            </div>

                            <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Alamat</label>
                                    <div class="col-md-6">
                                      {!! Form::textarea('alamat',null,['class'=>'form-control']) !!}
                                    </div>
                            </div>

                            <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">E-mail</label>
                                    <div class="col-md-6">
                                      {!! Form::text('email',null,['class'=>'form-control']) !!}
                                    </div>
                            </div>

                            <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-2">
                                        <button type="submit" class="btn btn-danger">Update data</button>
                                        <a href="{{ route('customer.index') }}" class="btn btn-info">Kembali</a>
                                    </div>
                          </div>
                      </div>
@endsection
