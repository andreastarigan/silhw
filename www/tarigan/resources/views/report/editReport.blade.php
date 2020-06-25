@extends('layouts.layoutAdmin')  

@section('content')
<!-- Horizontal Form -->
<section class="content">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Form Edit Laporan</h3>
      @if(session()->has('message'))
      <div class="">
        Alert::message('Message', 'Optional Title');
        {{ session()->get('message') }}
      </div>
      @endif
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="post" action="{{ url()->current()}}"class="form-horizontal">

      {{ csrf_field() }}


      <div class="box-body">
       <div class="form-group">
        <label for="text" class="col-sm-1 control-label">Tanggal</label>

        <div class="col-sm-11">
          <input type="date" class="form-control" readonly="" required value="{{$tanggal}}" " name="tanggal">
          {!! $errors->first('tanggal', '<strong class="text-danger">:message</strong>') !!}
        </div>
      </div>

      @foreach($data as $data)

      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" readonly="" class="form-control" required value="{{$data->id_wilayah}}" name="wilayah[]">
        </div>
      </div>
      <div class="form-group">
        <label for="text" class="col-sm-1 col-sm-offset-1 control-label">Target</label>
        <div class="col-sm-1">
          <input type="number" class="form-control" required value="{{$data->target}}"  name="target[]">
          {!! $errors->first('target', '<strong class="text-danger">:message</strong>') !!}
        </div>

        <label for="text" class="col-sm-1 control-label">Real Sale 2P</label>
        <div class="col-sm-1">
          <input type="number" class="form-control" required value="{{$data->real_sale_2p}}" name="real_sale_2p[]">
          {!! $errors->first('real_sale_2p', '<strong class="text-danger">:message</strong>') !!}
        </div>

        <label for="text" class="col-sm-1 control-label">Real Sale 3P</label>
        <div class="col-sm-1">
          <input type="number" class="form-control" required value="{{$data->real_sale_3p}}" name="real_sale_3p[]">
          {!! $errors->first('real_sale_3p', '<strong class="text-danger">:message</strong>') !!}
        </div>

        <label for="text" class="col-sm-1 control-label">MIG 2P</label>
        <div class="col-sm-1">
          <input type="number" class="form-control" required value="{{$data->mig_2p}}" name="mig_2p[]">
          {!! $errors->first('mig_2p', '<strong class="text-danger">:message</strong>') !!}
        </div>

        <label for="text" class="col-sm-1 control-label">MIG 3P</label>
        <div class="col-sm-1">
          <input type="number" class="form-control" required value="{{$data->mig_3p}}" name="mig_3p[]">
          {!! $errors->first('mig_3p', '<strong class="text-danger">:message</strong>') !!}
        </div>
      </div>
        
      <div class="form-group">
        <label for="text" class="col-sm-1 col-sm-offset-1 control-label">Down Sell</label>
        <div class="col-sm-1">
          <input type="number" class="form-control" required value="{{$data->down_sell}}" name="down_sell[]">
          {!! $errors->first('down_sell', '<strong class="text-danger">:message</strong>') !!}
        </div>

        <label for="text" class="col-sm-1 control-label">Up Sell</label>
        <div class="col-sm-1">
          <input type="number" class="form-control" required value="{{$data->up_sell}}" name="up_sell[]">
          {!! $errors->first('up_sell', '<strong class="text-danger">:message</strong>') !!}
        </div>

        <label for="text" class="col-sm-1 control-label">Churn Out</label>
        <div class="col-sm-1">
          <input type="number" class="form-control" required value="{{$data->churn_out}}" name="churn_out[]">
          {!! $errors->first('churn_out', '<strong class="text-danger">:message</strong>') !!}
        </div>

        <label for="text" class="col-sm-1 control-label">Non Indihome</label>
        <div class="col-sm-1">
          <input type="number" class="form-control" required value="{{$data->non_indihome}}" name="non_indihome[]">
          {!! $errors->first('non_indihome', '<strong class="text-danger">:message</strong>') !!}
        </div>

        <label for="text" class="col-sm-1 control-label">Target NAL</label>

        <div class="col-sm-1">
          <input type="number" class="form-control" required value="{{$data->target_nal}}" name="target_nal[]">
          {!! $errors->first('target_nal', '<strong class="text-danger">:message</strong>') !!}
        </div>
      </div>
      <div class="form-group">
        <label for="text" class="col-sm-1 col-sm-offset-1 control-label">Lite & Brite</label>
        <div class="col-sm-1">
          <input type="number" class="form-control" required value="{{$data->lite_brite}}" name="lite_brite[]">
          {!! $errors->first('lite_brite', '<strong class="text-danger">:message</strong>') !!}
        </div>

        <label for="text" class="col-sm-1 col-sm-offset-1 control-label">H-1</label>
        <div class="col-sm-1">
          <input type="number" class="form-control" required value="{{$data->h1}}" name="h1[]">
          {!! $errors->first('h1', '<strong class="text-danger">:message</strong>') !!}
        </div>
      </div>
      @endforeach          

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