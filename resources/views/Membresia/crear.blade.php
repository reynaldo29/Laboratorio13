<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 <x-guest-layout>
    <form method="POST" action="{{ route('Membresias.store') }}">
            {{ csrf_field() }}
            <div class="mt-4">
                <h1>{{ Auth::user()->id }}</h1>

            </div>
            <div>
                <x-jet-label for="email_user" value="{{ __('usuarioid') }}" />
                <x-jet-input id="email_user" class="block mt-1 w-full" type="text" name="usuarioid" value="{{ Auth::user()->id }}"/>
            </div>
            <div>
                <x-jet-label for="nombre" value="{{ __('fecha de expedicion') }}" />
                <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="fecha_expedicion"  />
            </div>
            <div>
                <x-jet-label for="fecha_registro" value="{{ __('fecha de expiracion') }}" />
                <x-jet-input id="fecha_registro" class="block mt-1 w-full" type="text" name="fecha_expiracion" />
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                    <input type="submit" value="Guardar" class="btn btn-success btn-block"/>
                    <a href="{{ route('Membresias.index') }}" class="btn btn-info btn-block" >Atrás</a>

            </div>
    </form>
</x-guest-layout>
