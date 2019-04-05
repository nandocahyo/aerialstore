@extends('admin.master')

@section('content')

                            <div class="header">
                                <h4 class="title">Edit Produk</h4>

                            </div>

                            <div class="card-body content">

                          {!! Form::model($produk,['files' => true, 'route'=>['produk.update',$produk->id],'method'=>'PUT']) !!}

                            <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Kode Produk</label>
                                    <div class="col-md-6">
                                      {!! Form::text('kode_produk',null,['class'=>'form-control']) !!}
                                    </div>
                            </div>

                            <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Nama</label>
                                    <div class="col-md-6">
                                      {!! Form::text('nama',null,['class'=>'form-control']) !!}
                                    </div>
                            </div>

                             <div class="form-group row">
                                <label class="col-md-2 col-form-label text-md-right">Nama Kategori</label>
                                     <div class="col-md-6">
                                     {!! Form::select('id_kategori',\App\Kategori::pluck('nama_kategori','id'),NULL,['class'=>'form-control']) !!}
                                    </div>
                           </div>

                            <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Foto</label>
                                    <div class="col-md-6">
                                      {!! Html::image('uploads/' . $produk->foto, $produk->nama,['class' => 'media-object','width' => 150, 'heigth' => 150]) !!}
                                      <br>
                                      {!! Form::file('foto') !!}
                                    </div>
                            </div>

                            <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Deskripsi</label>
                                    <div class="col-md-6">
                                      {!! Form::text('deskripsi',null,['class'=>'form-control']) !!}
                                    </div>
                            </div>

                            <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Stok</label>
                                    <div class="col-md-6">
                                      {!! Form::number('stok',null,['class'=>'form-control']) !!}
                                    </div>
                            </div>

                            <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Harga</label>
                                    <div class="col-md-6">
                                      {!! Form::number('harga',null,['class'=>'form-control']) !!}
                                    </div>
                            </div>

                            <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-2">
                                        <button type="submit" class="btn btn-danger">Update Data</button>
                                        <a href="{{ route('produk.index') }}" class="btn btn-info">Kembali</a>
                                    </div>
                          </div>
                      </div>
                            
@endsection
