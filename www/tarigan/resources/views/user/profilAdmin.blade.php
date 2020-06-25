@extends('layouts.layoutAdmin')  

@section('content')
  <!-- Horizontal Form -->
          <section class="content">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Data Pengguna</h3>
               @if(session()->has('message'))
              <div class="">
              Alert::message('Message', 'Optional Title');
              {{ session()->get('message') }}
            </div>
            @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form method="post" action="{{url()->current() }}"class="form-horizontal">

              {{ csrf_field() }}

              
              <div class="box-body">
                <div class="form-group">

                  <input type="hidden" name="id" value="{{ $user->id }}">
                
                  <label for="text" class="col-sm-2 control-label">Ganti Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Masukkan Nama
                    " name="name" value="{{$user->name}}">
                     {!! $errors->first('name', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>
                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Ganti Email</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Masukkan Email" name="email" value="{{$user->email}}">
                    {!! $errors->first('email', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>
  
                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Password Baru</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Masukkan Password minimal 6 karakter" name="password" value="">
                     {!! $errors->first('password', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>

                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Konfirmasi Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" placeholder="Masukkan Password minimal 6 karakter" name="password_confirmation" value="">
                     {!! $errors->first('password_confirmation', '<strong class="text-danger">:message</strong>') !!}
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </section>
@stop