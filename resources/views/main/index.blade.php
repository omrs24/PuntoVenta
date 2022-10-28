<!DOCTYPE html>
<html lang="en">
    @include('main.head')
<body>
    @include('main.header')

    @include('main.sidebar')

    {{-- Yield se usa para cargar las seccion llamada content en las diferentes paginas que vayamos a crear y asi tener una template
    con el head, header, footer y que sea e l mismo en todas las paginas, donde solo cambiara el contenido --}}
    @yield('content')
    
    {{-- A diferencia de yield include unicamente añade el contenido del archivo especificado--}}
    @include('main.footer')

    {{-- Yield se usa para cargar las seccion llamada scripts en las diferentes paginas que vayamos a crear y asi tener una template
    con el head, header, footer y que sea el mismo en todas las paginas, donde solo cambiara el contenido--}}
    @yield('scripts')

</body>
</html>