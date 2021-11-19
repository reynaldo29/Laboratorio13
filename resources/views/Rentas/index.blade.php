<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Historial con rentas</h1>
                <table class="table table-dark table-hover py-3">
                        <thead class="text-center">
                        <tr>
                            <th scope="col">Nombre de pelicula</th>
                            <th scope="col">Fecha de registro</th>
                            <th scope="col">Fecha de devolucion</th>
                            <th scope="col">Fecha de entrega</th>
                            <th scope="col" colspan="2">Accion</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rentas as $renta)
                            <tr>

                            <td>{{$renta -> nombre}}</td>
                            <td>{{$renta -> fecha_registro}}</td>
                            <td>{{$renta -> fecha_devolucion}}</td>
                            <td>{{$renta -> fecha_entrega}}</td>
                            <td><a class="btn btn-success btn-xs" href="{{ route('Rentas.edit',$renta -> id) }}">Editar</a></td>
                            <td><form action="{{route('Rentas.destroy', $renta->id)}}" method="post">{{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash">Eliminar</span></button>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('Peliculas.index') }}" class="btn btn-info btn-block" >Atrás</a>
            </div>
        </div>
    </div>
</x-app-layout>
