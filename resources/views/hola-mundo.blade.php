@extends( 'layouts.master' )

@section( 'title', 'Hola Mundo' )

@section( 'header' )
    @parent()
    
    <h1>¡Hola Mundo!</h1>
@stop

@section( 'content' ) 
    <p>Soy tu padre.</p>
@stop

@section( 'header' )
    @parent()
@stop