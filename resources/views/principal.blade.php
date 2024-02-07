{{-- Con la directiva de blade llamada extends llamamos la plantilla la cual ya tiene las configuraciones de nuestra página  --}}
@extends('layouts.app')

{{-- Section para enviar información al titulo --}}
@section('titulo')
    {{-- La inforación que este acá se va a inyectar en el yield que esta en app llamado titulo --}}
    Página principal
@endsection

@section('contenido')
    Contenido de esta página
@endsection
