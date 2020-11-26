@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/courses" method="POST">
        @csrf
        <div class="col-8 offset-2">
            <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Course Name') }}</label>
            <div class="col-md-6 pt-2">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>
            </div>
            <label for="lecturer" class="col-md-4 col-form-label text-md-right">{{ __('Course Lecturer') }}</label>
            <div class="col-md-6 pt-2">
                <input id="lecturer" type="text" class="form-control @error('lecturer') is-invalid @enderror" name="lecturer" value="{{ old('lecturer') }}" autofocus>
            </div>
            <label for="credit" class="col-md-4 col-form-label text-md-right">{{ __('Credit') }}</label>
            <div class="col-md-6 pt-2">
                <input id="credit" type="text" class="form-control @error('credit') is-invalid @enderror" name="credit" value="{{ old('credit') }}" autofocus>
            </div>
            <label for="requirement" class="col-md-4 col-form-label text-md-right">{{ __('Requirement') }}</label>
            <div class="col-md-6 pt-2">
                <input id="requirement" type="text" class="form-control @error('requirement') is-invalid @enderror" name="requirement" value="{{ old('requirement') }}" autofocus>
            </div>
            <label for="week_day" class="col-md-4 col-form-label text-md-right">{{ __('Week Day (1-6)') }}</label>
            <div class="col-md-6 pt-2">
                <input id="week_day" type="number" class="form-control @error('week_day') is-invalid @enderror" name="week_day" value="{{ old('week_day') }}" autofocus>
            </div>
            <label for="hour" class="col-md-4 col-form-label text-md-right">{{ __('Week Hour (0-24)') }}</label>
            <div class="col-md-6 pt-2">
                <input id="hour" type="number" class="form-control @error('hour') is-invalid @enderror" name="hour" value="{{ old('hour') }}" autofocus>
            </div>
            <label for="room" class="col-md-4 col-form-label text-md-right">{{ __('Room') }}</label>
            <div class="col-md-6 pt-2">
                <input id="room" type="number" class="form-control @error('room') is-invalid @enderror" name="room" value="{{ old('room') }}" autofocus>
            </div>
            <label for="link" class="col-md-4 col-form-label text-md-right">{{ __('Link') }}</label>
            <div class="col-md-6 pt-2">
                <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}" autofocus>
            </div>
            <label for="group" class="col-md-4 col-form-label text-md-right">{{ __('Group') }}</label>
            <div class="col-md-6 pt-2">
                <input id="group" type="number" class="form-control @error('group') is-invalid @enderror" name="group" value="{{ old('group') }}" autofocus>
            </div>
            <label for="group" class="col-md-4 col-form-label text-md-right"></label>
            <div class="col-md-6 pt-4 pl-5">
                <button class="btn btn-primary">Add Course</button>
            </div>
            </div>
        </div>
    </form>
</div>


@endsection
