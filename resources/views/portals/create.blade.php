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

                    This is the create page for Portal
                    <ul>
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li><a href="{{ url('portals') }}">View Portal List</a></li>
                    </ul>
                    <form class="form-horizontal" action="{{ route('portal_create') }}" method="POST">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Portal Name</label>
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
                          <label for="name" class="col-md-4 control-label">Course Code</label>
                          <div class="col-md-6">
                              <input id="code" type="text" class="form-control" name="code" value="{{ old('code') }}" required autofocus>

                              @if ($errors->has('code'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('code') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Semester</label>
                          <div class="col-md-6">
                              <input id="semester" type="text" class="form-control" name="semester" value="{{ old('semester') }}" required autofocus>

                              @if ($errors->has('semester'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('semester') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Instructor</label>
                          <div class="col-md-6">
                            {!! Form::select('instructor', $instructor, [], ['class'=>'form-control',
                                        'id'=>'instructor', 'placeholder'=>'--Select Instructor Name--']) !!}

                              @if ($errors->has('instructor'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('instructor') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  Save Portal
                              </button>
                          </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
