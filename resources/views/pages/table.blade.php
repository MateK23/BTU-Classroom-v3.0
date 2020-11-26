@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Monday</div>
                <div class="card-body">
                    <table style="width:100%">
                        <tr>
                            <th>Time</th>
                            <th>Room</th>
                            <th>Link</th>
                            <th>Group</th>
                            <th>Lecturer</th>
                        </tr>
                        @foreach($data as $value)
                        @if($value->week_day==1)
                        <tr>
                            <th>{{ $value->hour }}:00</th>
                            <th>{{ $value->room }}</th>
                            <th><a href="https://meet.google.com/kzm-pbjs-tho">Meet</a></th>
                            <th>{{ $value->group }}</th>
                            <th>{{ $value->lecturer }}</th>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Wednesday</div>

                <div class="card-body">
                    <table style="width:100%">
                        <tr>
                            <th>Time</th>
                            <th>Room</th>
                            <th>Link</th>
                            <th>Group</th>
                            <th>Lecturer</th>
                        </tr>
                        @foreach($data as $value)
                        @if($value->week_day==3)
                        <tr>
                            <th>{{ $value->hour }}:00</th>
                            <th>{{ $value->room }}</th>
                            <th><a href="https://meet.google.com/kzm-pbjs-tho">Meet</a></th>
                            <th>{{ $value->group }}</th>
                            <th>{{ $value->lecturer }}</th>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Friday </div>

                <div class="card-body">
                    <table style="width:100%">
                        <tr>
                            <th>Time</th>
                            <th>Room</th>
                            <th>Link</th>
                            <th>Group</th>
                            <th>Lecturer</th>
                        </tr>
                        @foreach($data as $value)
                        @if($value->week_day==5)
                        <tr>
                            <th>{{ $value->hour }}:00</th>
                            <th>{{ $value->room }}</th>
                            <th><a href="https://meet.google.com/kzm-pbjs-tho">Meet</a></th>
                            <th>{{ $value->group }}</th>
                            <th>{{ $value->lecturer }}</th>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Tuesday</div>

                <div class="card-body">
                    <table style="width:100%">
                        <tr>
                            <th>Time</th>
                            <th>Room</th>
                            <th>Link</th>
                            <th>Group</th>
                            <th>Lecturer</th>
                        </tr>
                        @foreach($data as $value)
                        @if($value->week_day==2)
                        <tr>
                            <th>{{ $value->hour }}:00</th>
                            <th>{{ $value->room }}</th>
                            <th><a href="https://meet.google.com/kzm-pbjs-tho">Meet</a></th>
                            <th>{{ $value->group }}</th>
                            <th>{{ $value->lecturer }}</th>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Thursday</div>

                <div class="card-body">
                    <table style="width:100%">
                        <tr>
                            <th>Time</th>
                            <th>Room</th>
                            <th>Link</th>
                            <th>Group</th>
                            <th>Lecturer</th>
                        </tr>
                        @foreach($data as $value)
                        @if($value->week_day==4)
                        <tr>
                            <th>{{ $value->hour }}:00</th>
                            <th>{{ $value->room }}</th>
                            <th><a href="https://meet.google.com/kzm-pbjs-tho">Meet</a></th>
                            <th>{{ $value->group }}</th>
                            <th>{{ $value->lecturer }}</th>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Saturday</div>

                <div class="card-body">
                    <table style="width:100%">
                        <tr>
                            <th>Time</th>
                            <th>Room</th>
                            <th>Link</th>
                            <th>Group</th>
                            <th>Lecturer</th>
                        </tr>
                        @foreach($data as $value)
                        @if($value->week_day==6)
                        <tr>
                            <th>{{ $value->hour }}:00</th>
                            <th>{{ $value->room }}</th>
                            <th><a href="https://meet.google.com/kzm-pbjs-tho">Meet</a></th>
                            <th>{{ $value->group }}</th>
                            <th>{{ $value->lecturer }}</th>
                        </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Courses</div>

                <div class="card-body">

                    <table style="width:100%">
                        <tr>
                          <th>Monday</th>
                          <th>Tuesday</th>
                          <th>Wednesday</th>
                          <th>Thursday</th>
                          <th>Friday</th>
                          <th>Saturday</th>
                        </tr>
                        <tr>
                          <td>Tuesday</td>
                          <td>Laravel</td>
                          <td>100</td>
                          <td>6</td>
                        </tr>
                        <tr>
                          <td>Wednesday</td>
                          <td>Python</td>
                          <td>98</td>
                          <td>6</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>Mathematics</td>
                            <td>98</td>
                            <td>6</td>
                          </tr>
                          <tr>
                            <td>Friday</td>
                            <td>C#</td>
                            <td>98</td>
                            <td>6</td>
                          </tr>
                          <tr>
                            <td>Saturday</td>
                            <td>C#</td>
                            <td>98</td>
                            <td>6</td>
                          </tr>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div> --}}
