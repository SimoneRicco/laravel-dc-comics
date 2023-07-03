<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <form method="POST" action="{{ route('comics.update', ['comic' => $comic->id]) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input
                    type="text"
                    class="form-control @error('title') is-invalid @enderror"
                    id="title"
                    name="title"
                    value="{{ old('title', $comic->title) }}"
                >
                <div class="invalid-feedback">
                    @error('title') {{ $message }} @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Link</label>
                <input
                    type="text"
                    class="form-control @error('thumb') is-invalid @enderror"
                    id="thumb"
                    name="thumb"
                    value="{{ old('thumb', $comic->thumb) }}"
                >
                <div class="invalid-feedback">
                    @error('thumb') {{ $message }} @enderror
                </div>
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input
                    type="text"
                    class="form-control @error('price') is-invalid @enderror"
                    id="price"
                    name="price"
                    value="{{ old('price', $comic->price) }}"
                >
                <div class="invalid-feedback">
                    @error('price') {{ $message }} @enderror
                </div>
            </div>
    
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input
                    type="text"
                    class="form-control @error('series') is-invalid @enderror"
                    id="series"
                    name="series"
                    value="{{ old('series', $comic->series) }}"
                >
                <div class="invalid-feedback">
                    @error('series') {{ $message }} @enderror
                </div>
            </div>
    
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <input
                    type="text"
                    class="form-control @error('sale_date') is-invalid @enderror"
                    id="sale_date"
                    name="sale_date"
                    value="{{ old('sale_date', $comic->sale_date) }}"
                >
                <div class="invalid-feedback">
                    @error('sale_date') {{ $message }} @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input
                    type="text"
                    class="form-control @error('sale_date') is-invalid @enderror"
                    id="type"
                    name="type"
                    value="{{ old('type', $comic->type) }}"
                >
                <div class="invalid-feedback">
                    @error('type') {{ $message }} @enderror
                </div>
            </div>
    
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea
                    class="form-control @error('description') is-invalid @enderror"
                    id="description"
                    rows="3"
                    name="description">{{ old('description', $comic->description) }}</textarea>
                <div class="invalid-feedback">
                    @error('description') {{ $message }} @enderror
                </div>
            </div>
    
            <button class="btn btn-primary">Salva</button>
        </form>
    </body>
</html>
