@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lab Report Repository</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    This is the create page for Report
                    <ul>
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li><a href="{{ url('reports') }}">View Report List</a></li>
                    </ul>
                    {!! Form::open(['url'=>url('reports/create', $portal_id), 'class'=>'form-horizontal', 'files'=>true,
                    'role'=>'form']) !!}

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Report Name</label>
                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                              @if ($errors->has('name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Upload File</label>
                          <div class="col-md-6">
                              <input id="file" type="file" class="form-control" name="file" value="{{ old('file') }}" required autofocus>

                              @if ($errors->has('file'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('file') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  Save Report
                              </button>
                          </div>
                      </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
