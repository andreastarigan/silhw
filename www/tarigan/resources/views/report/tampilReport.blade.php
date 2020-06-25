@extends('layouts.layoutAdmin')  

@section('content')


<section class="content-header">
  <h1>
    Laporan Harian Warroom
  </h1>
  @if(session()->has('message'))
  <div class="">
    Alert::message('Message', 'Optional Title');
    {{ session()->get('message') }}
  </div>
  @endif
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">

      <!-- /.box -->

      <div class="box">
        <div class="box-header">
          @if(Auth::user()->role === 'admin')
          <a href="tambah_data" class="btn btn-primary">Tambah</a> 
          @endif
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $count = 1; ?>
              @foreach($report as $data)
              <tr>
                <td> {{ $count }} </td>
                <td> {{ $data->tanggal}} </td>
                <td>
                  @if(Auth::user()->role === 'admin')
                  <a href="/edit_data/{{ $data->tanggal}}" class="btn btn-success">Edit</a>
                  <a href="/cetak_data/{{ $data->tanggal}}" class="btn btn-warning">Cetak</a>
                  <a href="/hapus_data/{{$data->tanggal }}" onclick="return confirm ('Apakah Anda Yakin Menghapus Data Ini ?'); " class="btn btn-danger"> Hapus </a>
                  @else
                  <a href="/cetak_data/{{ $data->tanggal}}" class="btn btn-warning">Cetak</a>
                  @endif
                </td>
              </tr>
              <?php $count++; ?>
              @endforeach 




            </tbody>

          </table>
        </div>  
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
@stop