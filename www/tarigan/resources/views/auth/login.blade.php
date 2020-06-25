@extends('layouts.login')

@section('content')
<div class="container">
    <div style="background: rgba(46, 51, 56, 0.7)">
      <h1 class="text-center huge">PT. Telkom Witel Sumut Timur Pematangsiantar</h1>
       <h4 class="text-center">Be The King Of Digital in The Region</h4>
    </div>
    <div class="col-md-3">
        
    </div>
  <div class="col-md-6">
    <div class="row">


        <div class="col-md-12 ">
            <div class="panel-transparent">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" style="background-color: transparent; color:#fff" required autofocus>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" style="background-color: transparent; color:#fff" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn " style=" background-color: rgba(122, 130, 136, 0.2) !important">
                                    Login
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
