<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Peliculas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Cartelera</h1>
                  <div class="">
                    <table class="table table-dark table-hover py-3">
                        <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Director</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Artista 1</th>
                            <th scope="col">Artista 2</th>
                            <th scope="col" colspan="2">Rentas</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($peliculas as $pelicula)
                        </tbody>
                        <tr>
                        <td>{{$pelicula -> nombre}}</td>
                        <td>{{$pelicula -> director}}</td>
                        <td>{{$pelicula -> genero}}</td>
                        <td>{{$pelicula -> artista1}}</td>
                        <td>{{$pelicula -> artista2}}</td>
                        <td><a class="btn btn-primary btn-xs" href="{{ route('Peliculas.edit',$pelicula -> id) }}">Rentar</a></td>


                        </tr>
                        @endforeach
                    </table>
                    <!-- <h1>{{ Auth::user()->email }}</h1> -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
