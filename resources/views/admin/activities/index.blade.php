{{-- @extends('layouts.admin')

@section('content')
@if (session()->has('message'))
        <div class="custom-alert alert alert-success mb-3 mt-3">
            <div class="alert-inner d-flex align-items-center">
                <div class="icon-change me-4">
                    @if (Str::contains(session()->get('message'), 'deleted'))
                    <i class="fa-solid fa-trash"></i>
                    @else
                    <i class="fa-solid fa-pen-to-square"></i>
                    @endif
                </div>
                {{ session()->get('message') }}
            </div>
        </div>
    @endif

    <section class="index-table">
        <div class="table-inner d-flex flex-column align-items-center">
            <div class="items-wrapper d-flex flex-wrap w-100">
            @foreach ($activities as $activity)
                    <div class="item d-flex flex-column justify-content-between align-items-center">

                        <div class="id-title d-flex justify-content-between align-items-center">
                            <div>
                                <small># :</small> <span class="fs-2">{{$activity->id}}</span>
                            </div>
                            <div>
                                <a href="{{route('admin.activities.show', $activity->slug)}}" title="View Activity" class="fs-4">
                                    {{$project->title}}
                                </a>
                            </div>
                        </div>

                        <div class="project-preview-pic">
                            @if (Str::startsWith($activity->image_cover, 'https://'))
                            <img src="{{$project->image_cover}}" alt="">
                            @elseif(Str::startsWith($activity->image_cover, 'activity'))
                            <img src="{{ asset('storage/' . $activity->image_cover) }}" alt="{{$activity->name}}">
                            @else
                            <img src="{{Vite::asset('resources/img/not_found.jpeg')}}" alt="placeholder project image">
                            @endif
                            <div class="glitched-layover"></div>
                            <a href="{{route('admin.activities.show', $activity->slug)}}" class="d-block pic-layover"></a>
                        </div>

                        {{-- <div>{{Str::limit($activity->description,100)}}</div> --}}

{{-- <div class="item-bottom d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <div><a class="edit-btn d-flex justify-content-center align-items-center" href="{{route('admin.activities.edit', $activity->slug)}}" title="Edit Activity"><i class="fa-solid fa-pen"></i></a></div>
                                <div>
                                    <form action="{{route('admin.activities.destroy', $activity->slug)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-button ms-3" data-item-title="{{$activity->name}}"><i class="fa-solid fa-trash-can"></i></button>
                                 </form>
                                </div>
                            </div>
                            <div class="d-flex flex-column align-items-end justify-content-around"> --}}
{{-- <div>
                                    <i class="fa-solid fa-folder-open me-2"></i>
                                    {{$activity->category ? $activity->category->name : 'Senza categoria'}}
                                </div> --}}
{{-- <div class="reviews">
                                    @foreach ($activity->reviews as $reviews)
                                        <span class="tag rounded-pill text-uppercase" style="color: {{ $tag->tag_color }}; border-color: {{ $tag->tag_color }}">{{$tag->name}}</span>
                                    @endforeach
                                </div> --}}
{{-- </div>
                        </div>
                    </div>
            @endforeach
            </div>
        </div> --}}
{{-- <div class="pages">
            {{$activity->links('vendor.pagination.bootstrap-5')}}
        </div> --}}
{{-- </section>


@endsection --}}
@extends('layouts.admin')
@section('content')
    <section id="admin-index">
        <nav class="d-flex justify-content-start align-items-center container">
            <h2 class="me-3">TripAdvisor - Admin Office:</h2>
            <ul class="d-flex justify-content-between align-items-center">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'admin.activities.index' ? 'active' : '' }}" href="{{route('admin.activities.index')}}">Activities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'admin.categories.index' ? 'active' : '' }}" href="{{route('admin.categories.index')}}">Categories</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dishCategories.index' ? 'active' : '' }}" href="{{route('admin.dishCategories.index')}}">Dish Categories</a> --}}
                    <a href="#">Dish Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'admin.dishes.index' ? 'active' : '' }}" href="{{route('admin.dishes.index')}}">Dishes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'admin.reservations.index' ? 'active' : '' }}" href="{{route('admin.reservations.index')}}">Reservations</a>
                    {{-- <a href="#">Reservations</a> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'admin.reviews.index' ? 'active' : '' }}" href="{{route('admin.reviews.index')}}">Reviews</a>
                </li>
            </ul>
        </nav>
        <div class="create-new">
            <a href="{{route('admin.activities.create')}}" class="btn btn-outline-success">New Activity</a>
        </div>
        <div class="activities-list mt-1">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Categories</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Website</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($activities as $activity)
                        <tr>
                            <th scope="row">{{$activity->id}}</th>
                            <td><a href="{{route('admin.activities.show', $activity->slug)}}" title="View Activity">{{$activity->name}}</a></td>
                            {{-- <td>{{Str::limit($activity->description,100)}}</td> --}}
                            <td>{{$activity->categories && count($activity->categories) > 0 ? count($activity->categories) : 0}}</td>
                            <td>{{$activity->adress}}</td>
                            <td>{{$activity->phone_number}}</td>
                            <td>{{$activity->email}}</td>
                            <td>{{$activity->website}}</td>
                            <td><a class="link-secondary" href="{{route('admin.activities.edit', $activity->slug)}}" title="Edit Activity">Edit</a></td>
                            <td>
                                <form action="{{route('admin.activities.destroy', $activity->slug)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button btn btn-danger ms-3" data-item-title="{{$activity->name}}">Delete</button>
                             </form>
                            </td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
