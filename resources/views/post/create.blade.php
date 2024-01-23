@extends('layouts.app')

@section('titulo')
    Crear una nueva Publicacion
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            imagen aqui
        </div>
        <div class="md:w-1/2 px-10 bg-white rounded-lg mt-10 md:mt-0">
            <form action="{{ route('register') }}" method="post" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">
                        Titulo
                    </label>
                    <input id="titulo" name="titulo" type="text" placeholder="El titulo"
                        class="border p-3 w-full rounded-lg @error('titulo')
                                    border-red-500 
                                @enderror"
                        value="{{ old('titulo') }}" />
                    @error('titulo')
                        <p class="bg-red-500 my-2 p-2 text-center text-white border rounded-lg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripcion
                    </label>
                    <textarea id="descripcion" name="descripcion" type="text" placeholder="Descripcion del post"
                        class="border p-3 w-full rounded-lg @error('descripcion')
                                    border-red-500 
                                @enderror"
                        value=""></textarea>
                    @error('descripcion')
                        <p class="bg-red-500 my-2 p-2 text-center text-white border rounded-lg">{{ $message }}</p>
                    @enderror
                </div>
                <input type="submit" value="Crear Publicacion"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg ">
            </form>
        </div>
    </div>
@endsection
