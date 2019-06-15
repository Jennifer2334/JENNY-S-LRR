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

                    This is the view page for - {{ $portal->name }}
                    <ul>
                      <li><a href="{{ url('portals', $portal->id ) }}">Upload Report</a></li>
                    </ul>
                    <table class="table display nowrap table-striped table-bordered table-hover">
                      <thead>
                        <th>#</th>
                        <th>Report Name</th>
                        <th>Rreport Author</th>
                      </thead>
                      <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
