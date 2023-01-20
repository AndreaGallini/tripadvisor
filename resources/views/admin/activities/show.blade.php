@extends('layouts.admin')

@section('content')
    <section id="admin-show">
        <div>
            <a class="back-btn btn btn-dark" href="{{route('admin.activities.index')}}">BACK</a>
            <h1>{{ $activity->name }}</h1>
            @if($activity->categories && count($activity->categories) > 0)
            @foreach ($activity->categories as $category)
                <span>{{$category->name}}</span>
            @endforeach
            @endif
            <div class="image">
                {{-- @if($activity->img_cover) --}}
                {{-- <img src="{{ asset('storage/' . $activity->img_cover) }}"> --}}
                {{-- @else --}}
                <img src="{{Vite::asset('resources/img/not_found.jpeg')}}" alt="">
                {{-- @endif --}}
            </div>
            <div class="infos d-flex flex-column">
                <div class="info-row d-flex justify-content-around my-3">
                    <div class="info-col d-flex justify-content-between">
                        <span>Address:</span>
                        <span>{{$activity->adress}}</span>
                    </div>
                    <div class="info-col d-flex justify-content-between">
                        <span>Phone number:</span>
                        <span>{{$activity->phone_number}}</span>
                    </div>
                </div>
                <div class="info-row d-flex justify-content-around my-3">
                    <div class="info-col d-flex justify-content-between">
                        <span>Email:</span>
                        <span>{{$activity->email}}</span>
                    </div>
                    <div class="info-col d-flex justify-content-between">
                        <span>Website:</span>
                        <span>{{$activity->website}}</span>
                    </div>
                </div>
                <div class="info-row d-flex justify-content-around my-3">
                    <div class="info-col d-flex justify-content-between">
                        <span>Price:</span>
                        <span>{{$activity->price}}</span>
                    </div>
                    <div class="info-col d-flex justify-content-between">
                        <span>Slug:</span>
                        <span>{{$activity->slug}}</span>
                    </div>
                </div>
            </div>
            {{-- <p>{!! $activity->description !!}</p> --}}
        </div>
    </section>
@endsection
