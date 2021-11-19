<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Membresia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Miembro</h1>
                <!-- <h1>{{ Auth::user()->id }}</h1> -->
                <table class="table table-dark table-hover py-3">
                        <thead class="text-center">
                        <tr>
                            <th scope="col">Fecha de expedicion</th>
                            <th scope="col">Fecha de expiracion</th>
                            <th scope="col" colspan="2">Accion</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($membresias as $membresia)
                            <tr>

                            <td>{{$membresia -> fecha_expedicion}}</td>
                            <td>{{$membresia -> fecha_expiracion}}</td>
                            <td><a class="btn btn-success btn-xs" href="{{ route('Membresias.edit',$membresia -> id) }}">Editar</a></td>
                            <td><form action="{{route('Membresias.destroy', $membresia->id)}}" method="post">{{csrf_field()}}
                            @method('DELETE')
                            <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash">Eliminar</span></button>
                            </td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <td><a class="btn btn-primary btn-xs" href="{{ route('Membresias.create') }}">Crear</a></td>

            </div>
        </div>
    </div>
</x-app-layout>
