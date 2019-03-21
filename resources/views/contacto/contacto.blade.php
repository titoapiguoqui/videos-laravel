@include( 'contacto.cabecera', array( 'nombre' => $nombre ) )

{{-- <h2>Página de contacto {{ $nombre }} {{ isset($edad) && !is_null($edad) ? $edad : 'Sin edad' }} </h2> --}}

{{-- CONDICIONAL IF --}}
@if( is_null($edad) )
    No existe la edad
@else
    Existe la edad: {{ $edad }}
@endif

<br/>

{{-- BUCLE FOR --}}
<?php $numero = 6 ?>

<h3>Tabla del {{ $numero }} con bucle for</h3>
@for( $i = 1; $i <=10; $i++ )
    {{ $i . ' x ' . $numero . ' = ' . ( $i * $numero ) }} <br/>
@endfor

<br/>

{{-- BUCLE WHILE --}}
<?php $numero2 = 1 ?>

<h3>Bucle while</h3>
@while( $numero2 <= 7 )
    <p>{{ 'Hola mundo ' . $numero2 }} </p>
    <?php $numero2++ ?>
@endwhile

<br/>

{{-- BUCLE FOREACH --}}
<h3>Listado de frutas con bucle foreach</h3>
@foreach( $frutas as $fruta )
    <p>{{ $fruta }}</p>
@endforeach