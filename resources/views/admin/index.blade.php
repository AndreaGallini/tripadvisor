@extends('layouts.admin')

@section('content')
    <div id="carouselTest">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://www.sangiorgiospa.eu/wp-content/uploads/2016/09/C0605-Ciambella-zuccherata.jpg"
                        class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://www.sangiorgiospa.eu/wp-content/uploads/2016/09/C0605-Ciambella-zuccherata.jpg"
                        class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://www.sangiorgiospa.eu/wp-content/uploads/2016/09/C0605-Ciambella-zuccherata.jpg"
                        class="d-block" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <a href="{{ route('admin.activities.index') }}">index</a>
    </div>
@endsection
