@extends('layouts.admin')

@section('content')
    <section id="create-form">
        <form action="{{route('admin.activities.store')}}" method="POST" enctype="multipart/form-data" class="p-4">
            @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required minlength="3">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="form-text">* Minimo tre caratteri</div>
              </div>
              <div class="mb-3">
                <label for="adress" class="form-label">Indirizzo</label>
                <input type="text" class="form-control @error('adress') is-invalid @enderror" id="adress" name="adress" required>
                @error('adress')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="phone_number" class="form-label">Numero di telefono</label>
                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" required>
                @error('phone_number')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Fascia Prezzo (opzionale)</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required>
                @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="website" class="form-label">Website</label>
                <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" name="website" required>
                @error('website')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              {{-- <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea rows="10" class="form-control" id="description" name="description"></textarea>
              </div> --}}
              <div class="mb-3">
                <img id="uploadPreview" width="100" src="https://via.placeholder.com/300x200">
                <label for="create_img_cover" class="form-label">Immagine</label>
                <input type="file" name="img_cover" id="create_img_cover" class="form-control  @error('img_cover') is-invalid @enderror">
                @error('img_cover')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
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
