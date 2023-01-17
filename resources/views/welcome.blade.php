@extends('layouts.guest')

@section('content')

<div class="container">
    <div id="carouselTest">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/27/84/49/41/caption.jpg?w=1200&h=-1&s=1&cx=984&cy=548&chk=v1_d569fcfd23819b30c9f4" class="d-block" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://www.sangiorgiospa.eu/wp-content/uploads/2016/09/C0605-Ciambella-zuccherata.jpg" class="d-block" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://www.sangiorgiospa.eu/wp-content/uploads/2016/09/C0605-Ciambella-zuccherata.jpg" class="d-block" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
</div>

@endsection
