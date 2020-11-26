@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Active</div>

                <div class="card-body">

                    <table style="width:100%">
                        <tr>
                          <th>ID</th>
                          <th>Course Name</th>
                          <th>Score</th>
                          <th>Credit</th>
                        </tr>
                        @foreach($active as $value)
                        <tr>
                            <th>{{ $value->id }}</th>
                            <th>{{ $value->name }}</th>
                            <th>{{ $value->score }}</th>
                            <th>{{ $value->credit }}</th>
                        </tr>
                        @endforeach
                      </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Archived Courses</div>

                <div class="card-body">

                    <table style="width:100%">
                        <tr>
                          <th>ID</th>
                          <th>Course Name</th>
                          <th>Score</th>
                          <th>Credit</th>
                        </tr>
                        @foreach($archive as $value)
                        <tr>
                            <th>{{ $value->id }}</th>
                            <th>{{ $value->name }}</th>
                            <th>{{ $value->score }}</th>
                            <th>{{ $value->credit }}</th>
                        </tr>
                        @endforeach
                      </table>

                </div>

            </div>
            <div class="card">
                <div class="card-header">Available Courses</div>

                <div class="card-body">

                    <table style="width:100%">
                        <tr>
                          <th>ID</th>
                          <th>Course Name</th>
                          <th>Requirement</th>
                          <th>Credit</th>
                        </tr>
                        @foreach($available as $value)
                        <tr>
                            <th>{{ $value->id }}</th>
                            <th>{{ $value->name }}</th>
                            <th>{{ $value->requirement }}</th>
                            <th>{{ $value->credit }}</th>
                        </tr>
                        @endforeach
                      </table>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
