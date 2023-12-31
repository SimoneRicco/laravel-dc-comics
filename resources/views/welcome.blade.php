<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Nuovo</a>
            <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale_date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['title'] }}</td>
                        <td class="overflow-auto">{{ $item['description'] }}</td>
                        <td><img src="{{ $item['thumb'] }}" alt="" class="dc-img"></td>
                        <td>{{ $item['price'] }}</td>
                        <td>{{ $item['series'] }}</td>
                        <td>{{ $item['sale_date'] }}</td>
                        <td>{{ $item['type'] }}</td>
                        <td>
                            <a type="button" class="btn btn-primary" href="{{ route('comics.show', ['comic' => $item->id]) }}">View</a>
                            <a type="button" class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $item->id]) }}">Edit</a>
                            <form
                            action="{{ route('comics.destroy', ['comic' => $item->id]) }}"
                            method="post"
                            class="d-inline-block"
                        >
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </body>
</html>
