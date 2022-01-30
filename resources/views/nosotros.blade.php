@extends('plantilla')

@section('seccion')
    <h1>Nosotros</h1>
    <h2>Este es mi equipo de trabajo</h2>
    @foreach ($equipo as $item)
        <a href="{{ route('nosotros', $item) }}" class="h4 text-danger">{{$item}}</a><br>        
    @endforeach
    @if (!empty($nombre))
        @switch($nombre)
            @case($nombre=='Ignacio')
                <h2 class="mt-5">El nombre es {{$nombre}}:</h2>
                <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos recusandae nam assumenda voluptas dolores et, doloremque rem reprehenderit hic, quaerat sequi omnis eius inventore consequuntur perspiciatis id. A, voluptas ab.</p>
                @break
            @case($nombre=='Juanito')
                <h2>El nombre es {{$nombre}}:</h2>
                <p>{{$nombre}} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti quaerat libero itaque modi praesentium vel doloribus, voluptatem numquam consequatur ullam similique dolore qui maiores, doloremque aperiam, rem saepe expedita?</p>
                @break
            @case($nombre=='Pedrito')
                <h2>El nombre es {{$nombre}}:</h2>
                <p>{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste ex quos iusto aliquam cum beatae rem ea sapiente labore laudantium debitis, illo ipsum eaque qui, autem optio laboriosam, placeat fugit.</p>
                @break
            @default                
        @endswitch
    @endif
@endsection