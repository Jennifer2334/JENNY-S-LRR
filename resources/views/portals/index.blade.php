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

                    This is the index page for Portal
                    <ul>
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li><a href="{{ url('portals/create') }}">Create New Portal</a></li>
                    </ul>

                    <table class="table display nowrap table-striped table-bordered table-hover">
                      <thead>
                        <th>#</th>
                        <th>Portal Name</th>
                        <th>Course Code</th>
                        <th>Semester</th>
                        <th>Upload Report</th>
                      </thead>
                      <tbody>
                        @foreach ($portals as $key => $portal)
                          <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $portal->name }}</td>
                            <td>{{ $portal->code }}</td>
                            <td>{{ $portal->semester }}</td>
                            <td><a href="{{ url('portals', $portal->id) }}">Upload</a></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
