@extends('layouts.app')
@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">
           <form action="{{ route('register') }}" method="POST" novalidate> {{-- novalidate deshabilita validacion html5--}}
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input type="text" id="name" name="name" placeholder="Tu nombre" value="{{old('name')}}" class="border p-3 w-full rounded-lg
                        @error('name') border-red-500 @enderror">
                    @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre de usuario
                    </label>
                    <input type="text" id="username" name="username" placeholder="Nombre de usuario" class="border p-3 w-full rounded-lg">
                </div>
                @error('username')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{$message}}
                </p>
                @enderror
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Correo electrónico
                    </label>
                    <input type="email" id="email" name="email" placeholder="Correo electrónico a registrar" class="border p-3 w-full rounded-lg">
                </div>
                @error('email')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{$message}}
                </p>
                @enderror
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña
                    </label>
                    <input type="password" id="password" name="password" placeholder="Ingrese una contraseña" class="border p-3 w-full rounded-lg">
                </div>
                @error('password')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                    {{$message}}
                </p>
                @enderror
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Contraseña
                    </label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Ingrese una contraseña" class="border p-3 w-full rounded-lg">
                </div>

                <input type="submit" value="Crear cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

            </form>
        </div>
    </div>
@endsection
