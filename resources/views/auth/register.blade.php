{{-- Partimos de la plantilla principal --}}
@extends('layouts.app')

@section('titulo')
    Regístrate en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">

        <div class="md:w-4/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen registro de usuarios">

        </div>
        <div class="md:w-6/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="/crear-cuenta" method="POST">
                @csrf
                {{-- Nombre --}}
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Nombre</label>
                    <input id="name" name="name" placeholder="Tu Nombre" class="border p-3 w-full rounded-lg"
                        type="text">
                </div>
                {{-- Nomber de usuario --}}
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                    <input id="username" name="username" placeholder="Tu Nombre de Usuario"
                        class="border p-3 w-full rounded-lg" type="text">
                </div>
                {{-- Email --}}
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input id="email" name="email" placeholder="Tu Email de Registro"
                        class="border p-3 w-full rounded-lg" type="email">
                </div>
                {{-- Password --}}
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input id="password" name="password" placeholder="Password de Registro"
                        class="border p-3 w-full rounded-lg" type="password">
                </div>
                {{-- Repetir Password --}}
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repetir
                        Password</label>
                    <input id="password_confirmation" name="password_confirmation" placeholder="Repite tu Password"
                        class="border p-3 w-full rounded-lg" type="password">
                </div>

                <input type="submit" value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

            </form>

        </div>

    </div>
@endsection
