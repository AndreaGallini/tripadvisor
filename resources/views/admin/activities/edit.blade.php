@extends('layouts.admin')

@section('content')
<section id="create-form">
    <form action="{{route('admin.activities.update', $activity->slug)}}" method="POST" enctype="multipart/form-data" class="p-4">
        @csrf
        @method('PUT')

          <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name', $activity->name)}}">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="form-text">* Minimo tre caratteri</div>
          </div>
          <div class="mb-3">
            <label for="adress" class="form-label">Indirizzo</label>
            <input type="text" class="form-control @error('adress') is-invalid @enderror" id="adress" name="adress" value="{{old('adress', $activity->adress)}}">
            @error('adress')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="phone_number" class="form-label">Numero di telefono</label>
            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{old('phone_number', $activity->phone_number)}}">
            @error('phone_number')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Fascia Prezzo (opzionale)</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price', $activity->price)}}">
            @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email', $activity->email)}}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="website" class="form-label">Website</label>
            <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" name="website" value="{{old('website', $activity->website)}}">
            @error('website')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          {{-- <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea rows="10" class="form-control" id="description" name="description"></textarea>
          </div> --}}
          <div class="d-flex">
            <div class="media me-4">
                <img class="shadow" width="150" src="{{asset('storage/' . $activity->img_cover)}}" alt="{{$activity->name}}">
            </div>
            <div class="mb-3">
                <label for="img_cover" class="form-label">Replace Activity Image</label>
                <input type="file" name="img_cover" id="img_cover" class="form-control  @error('img_cover') is-invalid @enderror" >
                @error('img_cover')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
          {{-- <div class="mb-3">
            <label for="category_id" class="form-label">Seleziona categoria</label>
            <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                <option value="">Selezione categoria</option>
              @foreach ($categories as $category)
                  <option value="{{$category->id}}" {{ $category->id == old('category_id') ? 'selected' : '' }}>{{$category->name}}</option>
              @endforeach
            </select>
            @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div> --}}
          {{-- <div class="mb-3">
            <label for="categories" class="form-label">Categories</label>
            <select multiple class="form-select" name="categories[]" id="categories">
                @forelse ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @empty
                    <option value="">No tag</option>
                @endforelse
            </select> --}}

          </div>
          <button type="submit" class="btn btn-success">Submit</button>
          <button type="reset" class="btn btn-primary">Reset</button>
    </form>
</section>
@endsection
