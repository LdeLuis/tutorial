{{-- <x-app-layout>
    --contenido--
</x-app-layout>  se usa para llamar a la plantilla tipo 1 --}}


{{-- Tipo de plantilla 2 --}}
@extends('layouts/app')  

@section('title', 'Laravel')

{{-- se usa para stack // la diferencia es que yield es de un unico contenido
 y stack puede ir sumando varios que coloques en un mismo archivo --}}
@push('css')
    <style>
        body{
            background-color: whitesmoke;
        }
    </style>
@endpush
@push('css')
<style>
    body{
        color: #a81b1b;
    }
</style>
@endpush


@section('content')

    <div class="max-w-4xl mx-auto px-4">
        {{-- <h1>Bienvenido a la página principal</h1> --}}

        <x-alert2 type="dark" class="mb-4">
            {{-- titulo de la alerta --}}
            <x-slot name="title">
                Titulo de la alerta
            </x-slot>

            Contenido de la alerta
        </x-alert2>
        <p>Hola mundo</p>
    </div>
    
@endsection

    

