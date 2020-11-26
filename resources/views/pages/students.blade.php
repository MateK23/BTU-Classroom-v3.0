@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Students</div>
                <div class="card-body">

                    <table style="width:100%">
                        <tr>
                          <th>ID</th>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th>Personal Number</th>
                        </tr>
                        @foreach($data as $value)
                        <tr>
                            <th>{{ $value->id }}</th>
                            <th>{{ $value->name }}</th>
                            <th>{{ $value->email }}</th>
                            <th>{{ $value->p_number }}</th>
                        </tr>
                        @endforeach
                      </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Lecturer</div>
                <div class="card-body">

                    <table style="width:100%">
                        <tr>
                          <th>ID</th>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th>Personal Number</th>
                        </tr>
                        @foreach($data2 as $value)
                        <tr>
                            <th>{{ $value->id }}</th>
                            <th>{{ $value->name }}</th>
                            <th>{{ $value->email }}</th>
                            <th>{{ $value->p_number }}</th>
                        </tr>
                        @endforeach
                      </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Moderators & Admins</div>
                <div class="card-body">

                    <table style="width:100%">
                        <tr>
                          <th>ID</th>
                          <th>Full Name</th>
                          <th>Email</th>
                          <th>Personal Number</th>
                        </tr>
                        @foreach($data3 as $value)
                        <tr>
                            <th>{{ $value->id }}</th>
                            <th>{{ $value->name }}</th>
                            <th>{{ $value->email }}</th>
                            <th>{{ $value->p_number }}</th>
                        </tr>
                        @endforeach
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
