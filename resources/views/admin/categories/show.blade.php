@extends('layouts.admin')

@section('content')
    <div class="text-white">
        <a class="btn btn-dark" href="{{route('admin.activities.index')}}">BACK</a>
        <h1>{{ $activity->name }}</h1>
        @if ($activity->category)
            <small>Category: {{$activity->category->name}}</small>
        @endif
        {{-- <p>{!! $activity->description !!}</p> --}}
        <img src="{{ asset('storage/' . $activity->img_cover) }}">
    </div>
@endsection
