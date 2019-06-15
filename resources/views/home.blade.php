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

                    <ul>
                      <li><a href="{{ url('portals') }}">Portals</a></li>
                      <li><a href="{{ url('reports') }}">Reports</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection