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

                    This is the index page for Report
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                    </ul>

                    <table class="table display nowrap table-striped table-bordered table-hover">
                      <thead>
                        <th>#</th>
                        <th>Report Name</th>
                        <th>File</th>
                        <th></th>
                        <th></th>
                      </thead>
                      <tbody>
                        @foreach ($reports as $key => $report)
                          <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $report->name }}</td>
                            <td>{{ $report->file }}</td>
                            <td><a href="{{ asset('uploads/'.$report->file) }}">Download</a></td>
                            <td></td>
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
